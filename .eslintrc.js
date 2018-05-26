module.exports = {
    "env": {
        "browser": true,
        "commonjs": false,
        "es6": false,
        "node": false,
        "jquery": true
    },
    "extends": ['eslint:recommended', 'plugin:react/recommended'],
    "parserOptions": {
        "ecmaFeatures": {
            "experimentalObjectRestSpread": true,
            "jsx": true
        },
        "sourceType": "module"
    },
    "plugins": [
        "react"
    ],
    "rules": {
        "indent": [
            "error",
            2
        ],
        "linebreak-style": [
            "error",
            "unix"
        ],
        "quotes": [
            "error",
            "single"
        ],
        "semi": [
            "error",
            "always"
        ]
    }
};
