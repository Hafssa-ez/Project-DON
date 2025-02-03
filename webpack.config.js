const Encore = require('@symfony/webpack-encore');

Encore
    .setOutputPath('public/build/') // Dossier de sortie
    .setPublicPath('/build') // URL publique pour accéder aux fichiers générés

    // Entrées CSS
    .addStyleEntry('inscription', './assets/styles/inscription.css') // Styles spécifiques à l'inscription
    .addStyleEntry('style', './assets/styles/style.css') // Styles globaux

    // Configuration de base
    .enableSingleRuntimeChunk()
    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction());

// Exporter la configuration
module.exports = Encore.getWebpackConfig();
