<?php

return [
    // Active l'enregistrement des visites (middleware ajouté au groupe « web »).
    'enabled' => env('STATS_ENABLED', true),

    // Chemins jamais comptés (motifs de Str::is). L'admin est déjà exclu par
    // l'utilisateur connecté, ces motifs couvrent les pages techniques.
    'ignore_paths' => [
        'livewire/*', 'livewire-*', '_debugbar/*', 'telescope/*', 'horizon/*',
        'login', 'logout', 'register', 'forgot-password', 'reset-password*',
        'two-factor-challenge', 'user/*', 'email/*', 'up', 'sanctum/*',
        'storage/*', 'uploads/*', 'build/*', 'vendor/*',
    ],

    // Nombre de jours de visites brutes conservées après agrégation (0 = suppression immédiate).
    'keep_raw_days' => 2,

    // Couleur principale du tableau de bord. Dans le .env, mettre la valeur entre guillemets : STATS_ACCENT="#059669" (sinon # démarre un commentaire).
    'accent' => env('STATS_ACCENT', '#059669'), // vert des boutons de l'admin
];
