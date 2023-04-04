<?php

return [ 
    'client_id' => env('PAYPAL_CLIENT_ID','ASZyfYAKtLR32W8-brzuzpaz0QxH5qx1GEuFRNKk5eb-IkPceaP-drdQDWNOCzZvM1BfiuXTydM-ENGk'),
    'secret' => env('PAYPAL_SECRET','ENAjRKe8dj2dYzkFahWhMV-mcAMt0s5vw_yqPydJn_vpwVuhccwH6tRZDWg9dHGqJbNPBJYcgyxD515S'),
    'settings' => array(
        'mode' => env('PAYPAL_MODE','sandbox'),
        'http.ConnectionTimeOut' => 30,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'ERROR'
    ),
];