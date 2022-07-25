module.exports = {
    moduleFileExtensions: ['js', 'jsx', 'json', 'vue', 'ts', 'tsx'],
    transform: {
        '^.+\\.vue$': '@vue/vue2-jest',
        '.+\\.(css|styl|less|sass|scss|png|jpg|ttf|woff|woff2)$':
            'jest-transform-stub',
        '^.+\\.(js|jsx)?$': 'babel-jest'
    },

    moduleNameMapper: {
        '^@/(.*)$': '<rootDir>/resources/js/$1',
        "^ziggy$": "<rootDir>/vendor/tightenco/ziggy/dist/index",
    },
    snapshotSerializers: ['jest-serializer-vue'],
    testMatch: [
        '<rootDir>/(tests/Frontend/**/*.spec.(js|jsx|ts|tsx))'
    ],
    transformIgnorePatterns: ['/node_modules/(?!@tiptap)'],
    testEnvironment: 'jsdom',
};
