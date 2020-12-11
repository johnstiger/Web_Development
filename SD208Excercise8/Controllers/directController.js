const createError = require('http-errors');
const User = require('../Models/userModel');
const { authSchema } = require('../Services/validationSchema');
const { signAccessToken, signRefreshToken } = require('../Services/jwt_helper');
const { verifyAccessToken } = require('../Services/jwt_helper');

module.exports = {
    verifyAccessToken, async homepage(req, res, next) {
        try {
            res.render('register');
        } catch (error) {
            next(error);
        }
    },
    async register(req, res, next) {
        try {
            const result = await authSchema.validateAsync(req.body);
            const doesExist = await User.findOne({ email: result.email });
            if (doesExist) throw createError.Conflict(`${result.email} is already been registered`);
            const newUser = {
                username: req.body.username,
                email: req.body.email,
                password: req.body.password
            };
            const user = new User(newUser);
            const savedUser = await user.save();
            const accessToken = await signAccessToken(savedUser.id);
            const refreshToken = await signRefreshToken(savedUser.id);
            console.log({ accessToken, refreshToken });
            res.render('login', { username: newUser.username, access:accessToken, refresh:refreshToken })
        } catch (error) {
            if (error.isJoi == true) error.status = 422
            next(error);
        }
    },
    async login(req, res, next) {
        try {
            const result = await authSchema.validateAsync(req.body);
            const user = await User.findOne({ email: result.email });
                if (!user) throw createError.NotFound("User is not registered");
                const Match = await user.isValidPassword(result.password);
                if (!Match) throw createError.Unauthorized('Username/password is not valid');
                const accessToken = await signAccessToken(user.id);
                const refreshToken = await signRefreshToken(user.id);
                console.log({ accessToken, refreshToken });
                res.render('content', { username: user.username, access:accessToken, refresh:refreshToken })
            }catch(error) {
            if (error.isJoi === true) return next(createError.BadRequest('Invalid Username/Password'));
            next(error);
        }
    }
}
