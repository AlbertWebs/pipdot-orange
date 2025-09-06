<?php 
return [ 
    'client_id' => 'AWWCzuoHOEA4AcZJ1zvQjzFj97qudiMzlEBFcor2rgfA30nDmJePvy04qnxzBMcK6CbhJZqxqYuvSmNm',
	'secret' => 'EBWZfPskDTgHtwI7IwVfbwPieHSj65txaxs_cg2seGVxDOhyFV4IPfeKa2yDg8lRNqP_zDL6F9Z6xnjs',
    'settings' => array(
        'mode' => 'live',
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];