<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/manual' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'larecipe.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vapor/signed-storage-url' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BcJberOa8gzC3FwE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vapor-ui/api/jobs/metrics' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8VOtvZ1O3ST7cVk2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/presc/message/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dom8QN0fP3XHUl5S',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patien/message/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4wf0ZY02wmGdPFcj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/export-excel/medicines' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XFMl7pi3OVPpM1df',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/import-excel/medicines' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'medicine.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/export-excel/usuarios' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZAwHHalnLj3x8THN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/export-excel/farmacias' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lbVnRNAobibSw1jX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/import-excel/farmacias' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'farmacias.import',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cep' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pyWCikA7hiPe1mev',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/symptom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wzxvTvZ8mxHFk8x6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/medicine' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kmxUDrNgRQz714e7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/all-medicines' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fw7BRO0T3YTyZKSs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/diagnose' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JlcjlLrXbt7Oa9uL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZvXMmcJNMsnv51kJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pharmacy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fpPCX57U46uI3J0p',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NYPiCpmOZUi3HGHX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/treatment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1ONs0VitgEgy10pZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mRrqVid0wGzbfAw6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/permissao' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6PljslKpNVLVOodZ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pbzX8nu5NNJdCYel',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/permissao-user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1OQ80OzmjPLfRlKo',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/documents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::O24ZTxoSayaKT5pd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ytxcsYckxOIPpOYw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/documents/status/cpf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uZmghwZ0omh8X3n9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/foto-perfil' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DEY7YnjYjW66eLex',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tzC3JfU1vOGjznYq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/auth/google' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auth.google',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/auth/google/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YbwocuBzFTJ5fWHp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PbfHQFF95FyjsnO9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/signup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KBEQsOjOVl1oGKzL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/recover-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rmMUb4rrQd53JnUy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/confirm-recovery-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pb3BaaCP7P5ITplY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/new-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PDtuOpN4pTGu8n9u',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/new-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qgCEVZ1ucJKGjoSi',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/configs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k1XNvyx12IqUh4yJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::El6XkvimAg4Mltdp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w2u0rBlwBGijEZf6',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/set-treatment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DfZgeu5P8Dxha016',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wRQH5rwQ8Oq5VRky',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/foto-perfil' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fT8XOWRHu9b0nsD2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XhDAVDYdBaLnPG3n',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CAFcv0cfvEyyh79P',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h88yD3ei5JaHlUmk',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/apn-token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::99lEUhFlRchGW1rt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/inform-med' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EBMTSq8Ja1e8KqxK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6WCGQ88rpYmkCN0a',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/inform-symptoms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X5G00knsDXD9cOzR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/informed-symptom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BuA42rXOFaqNIkbX',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qpS8zhUkpLWauEdq',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/informed-symptoms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L9CGpFy9x1p51qeo',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/informed-symptoms/week' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c4t6mpDyUEAi5Yyv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/informed-symptoms/month' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5gqspDXWbNzYQYM1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/informed-symptoms-count' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5O7A7afo8gzQ10AJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/inform-treatment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HcCVdYtNMhWjkZIh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/follow-up' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pMZVZB1CMHj2HUVd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HpnbFwQDB2YHbYMA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9kQ854476lkbTiXI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/message/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BpokBjHoJ2zjxq1S',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/message/patient' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ujvCnFE2CSB1qxO8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/medicine' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XSuIqCt0CY2EUeL6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/all-medicines' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ts643vN8HKEyTw9M',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/reminder/medicine' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::64rCtBqxbFJ6ZxRh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ikw02F5sbSBQj7hD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/treatment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Uai2cbqVsCIYqPR4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6LmwISdfOLDhEz7g',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/diagnose' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::49STdt8TmQsMWMoq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::omCMCPAj3MKjWusp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/new-treatment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YCVFnQx4HAsxtJVr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/patient/all-newtreatments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fxvpUvTvq5osdZHM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t2qTOta2jn0dSeq8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/signup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sxoJV7QRnW3TwuAF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/recover-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YHgT8jPpBZTAbzq3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/confirm-recovery-code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1KTMAJLffDTOGaR1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/new-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J1bNc3DANKQupGbr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/configs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3Pnk3cQQlFUi1VSO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3DBnguPDfgFsw7Uv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zaySvEeMQ5pe7ZOA',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/documents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MfMoUn6IKtNZ3SjR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9XNROOOAFiuniREZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/foto-perfil' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::enafVSVsLhaideMQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y0jyQ5vgXAP8CQPf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U2qf72get6uq9ZRS',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1Wfrm3ArHJqp90Sr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/apn-token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z40nGgQbxeJQD4fy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/all-medicines' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MfQzzKnykOowrEKC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/medicine' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cEoOTwnSDVZolG4c',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/treatment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6wJ62aw2KgR0pXRz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4XqcOYnODndzt2lA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/new-treatment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2WxFwStIPFXyE9TI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/all-newtreatments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N0FludREfc5G7NLO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/diagnose' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MMOTCX4H0WFQFDAS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zNZqtR0sSTOPDoPl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/inform-med' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eOu8IeZQrdUbDoD9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/informed-symptoms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S7oFNHcJzXNaztL6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/informed-symptoms/week' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zI0nWRjy0Krqmvkc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/message/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jzQERLR3lCq4clri',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/message/patient' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uzHOC4CZPtqDMCCC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/message' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qAkiDriCQskNCDB0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/create-patient' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Oxzz8c4YFR8SerMr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/find-patient' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sg2U4pexWvg0pw5a',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/connect-patient' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::C1PwLRVx89n6o9j7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/treatment-with-patient' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eHk1b4kUlnMUGiGV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/patients-with-treatments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1BngOGwBRVHVMtbO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/count/patients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NUPRvDMvLrLsoFV6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/get-availability' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::R22s8orlXzPnHzqU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/create-availability' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EfqUPgnseq3Tz0fs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/vouchers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OSWPBinjREIjzg7X',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/voucher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hbXwAgD9bL2r7l3h',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/use-voucher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TGNek4vjPaCdm9o1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/clinic-adress' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oOYnh4BuAaNTSd61',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2DDQRh3BdyV7507q',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::H2IqICZ59Wls79qQ',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/create-appointment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PTIUe590jmwLxcZW',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/next-appointments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aQIVLQ4IkLTpDXEA',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/past-appointments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ayqeR5bZzqXcuSPC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/produto-indicado' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QCnc8tW3LjLYtpqx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/symptoms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nUqIEdNkAFdUmuEw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/prescriber/symptom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g7o4DHBQrIXULg0Y',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cadastro-sintomas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mNWVeyctys9RUIqc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cadastro-medicamentos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rddC3tNbXNEm9pFy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/cadastro-diagnosticos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BBSHQ88ofbFdkzTv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/validacao-documentos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6ur0igVj4ZQ9IDpL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/config-pushs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KWtOlR4lD3q6B5Yi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/farmacias-parceiras' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WBiTFL8b0fAV3ics',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/usuarios' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WEtPPsVCY2GaFsGl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/desconto-promocao' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZWF1jYGSyABzelV2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/extracaodados' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zAm6aDuMn2ZB7WND',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/permissoes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kOiko7dyHmE6kyL8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/mensagens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mensagens',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/listar-usuarios' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FJXmAgRdh261uMDq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l9fVHNZqgjiE75Fb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile.edit',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'profile.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'profile.destroy',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4XtSjRLcjaq911TT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nhPu0s0PID9ddPIw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/verify-email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.notice',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/verification-notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.send',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/confirm-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LYT9kLhhV7SjeccO',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/manual/(?|s(?|earch\\-index/([^/]++)(*:43)|tyles/([^/]++)(*:64)|cripts/([^/]++)(*:86))|([^/]++)(?:/((?:.*)))?(*:116))|/v(?|apor\\-ui(?|/api/(?|logs/([^/]++)(?|(*:165)|/([^/]++)(*:182))|jobs/(?|([^/]++)(?|(*:210)|/([^/]++)(*:227))|failed/(?|retry/([^/]++)(*:260)|forget/([^/]++)(*:283))))|(?:/((?:.*)))?(*:308))|erify\\-email/([^/]++)/([^/]++)(*:347))|/api/(?|s(?|ymptom/([^/]++)(?|(*:386))|elfie\\-com\\-doc/([^/]++)(*:419))|medicine/([^/]++)(?|(*:448))|diagnose/([^/]++)(?|(*:477))|p(?|harmacy/([^/]++)(?|(*:509))|ermissao/([^/]++)(?|(*:538))|atient/(?|get\\-treatments/([^/]++)(*:581)|patient\\-info/([^/]++)(?|(*:614))|d(?|e(?|sativate\\-account/([^/]++)(*:657)|lete\\-account/([^/]++)(*:687))|iagnose/([^/]++)(?|(*:715)))|account\\-config/([^/]++)(*:749)|medicine/([^/]++)(?|(*:777))|reminder/medicine/([^/]++)(?|(*:815))|treatment/([^/]++)(?|(*:845))|new\\-treatment/([^/]++)(?|(*:880)))|rescriber/(?|p(?|rescriber\\-info/([^/]++)(?|(*:934))|atient\\-info/([^/]++)(*:964)|ercepcao\\-melhora/([^/]++)(*:998))|d(?|e(?|sativate\\-account/([^/]++)(*:1041)|lete\\-account/([^/]++)(*:1072))|iagnose/([^/]++)(?|(*:1101))|rop\\-appointment/([^/]++)(*:1136))|medicine/([^/]++)(?|(*:1166))|treatment/([^/]++)(?|(*:1197))|new\\-treatment/([^/]++)(?|(*:1233))|e(?|rase\\-connected\\-patient/([^/]++)(*:1280)|nd\\-appointment/([^/]++)(*:1313))|voucher/([^/]++)(?|(*:1342))))|treatment/([^/]++)(?|(*:1375))|crm\\-(?|frente/([^/]++)(*:1408)|verso/([^/]++)(*:1431))|foto\\-perfil/([^/]++)(*:1462)|valide/(?|crm\\-(?|frente/([^/]++)(*:1504)|verso/([^/]++)(*:1527))|selfie\\-com\\-doc/([^/]++)(*:1562)|foto\\-perfil/([^/]++)(*:1592)))|/reset\\-password/([^/]++)(*:1628))/?$}sDu',
    ),
    3 => 
    array (
      43 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'larecipe.search',
          ),
          1 => 
          array (
            0 => 'version',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      64 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'larecipe.styles',
          ),
          1 => 
          array (
            0 => 'style',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      86 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'larecipe.scripts',
          ),
          1 => 
          array (
            0 => 'script',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      116 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'larecipe.show',
            'page' => NULL,
          ),
          1 => 
          array (
            0 => 'version',
            1 => 'page',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      165 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h5Fswed6RbI4dteN',
          ),
          1 => 
          array (
            0 => 'group',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      182 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j5stey8ShuwZUhoj',
          ),
          1 => 
          array (
            0 => 'group',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      210 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4pZX0a9wiIkbolMi',
          ),
          1 => 
          array (
            0 => 'group',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      227 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kvq4vuhaKjutqBSe',
          ),
          1 => 
          array (
            0 => 'group',
            1 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      260 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::voC3Qmf0Hbu8Ez0P',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      283 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v8TZ1mp6mPsfYCWe',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      308 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vapor-ui',
            'view' => NULL,
          ),
          1 => 
          array (
            0 => 'view',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      347 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'verification.verify',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      386 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UlRIFDyyHIaaAZx2',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3XB86qvM3AHLr8nf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      419 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2rfTV2R17N4yWZaZ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      448 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y6oPxErSf1LzqHyj',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WGCUFGHKbMMrqny2',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dulvR8lKTHBh4pzD',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      477 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ln2DSeYtNpBhjop5',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WtcAC6MFpgLZawxo',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gDQK38orEVlGbn8W',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      509 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j5FM0Lbc1M60lQTk',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VIrVOHTOAty7b4Ir',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SlTStvttSkvY1BOz',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      538 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rMaecIPauahgt6MM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TvV9W9j4LSf4USzV',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PryPtuvVtclprXFR',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      581 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZR8hfooKbvLyFXgT',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      614 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4K5lDOTpRteipwU6',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::krNCiY4v2HkYkuii',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      657 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mQ0Cwu84KhReWToj',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      687 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t7wvIOA3clfQPzV7',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      715 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SFGQWEVV8iXPaweE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JodX4AXtp18MsVYW',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ltnMMbLpg2LRfgPR',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      749 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9eqiGYlVTcVHpGMi',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      777 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pgmeUMbHsN4FaCnM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IBJyYOuF5FoeUytb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ebv6i916yevbOXqw',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      815 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zZu8YZAruEcTBHxg',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cvlfnYteAvXxwZym',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CmoxmsvIfgJ7sde3',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      845 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VHaRidgTPUH0Pz43',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cEnYBmCVkEIe4gz5',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oM6zKzvhNMjQ8tdT',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      880 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K3P96PjkQ9M4xt7g',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N4rkpMvPzCK2YZRO',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2m2ynyBmhHLfeITa',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      934 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GQFcDHzBpeX91gwg',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LtXpwIgbzEPh1ELJ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      964 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lkM0oLcQEurks4SL',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      998 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GNwXfafSESIeoQcB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1041 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DtFay7ti05ZsNqgx',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1072 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AlWBEw7ds4v465OH',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1101 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GTXVFfbTAM1aj8iN',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GNz2VMWzV8VSV7UE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bgX1B2b4nGokaETc',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1136 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XPYrKMvDGam2xo0Y',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1166 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f2ieQh743A7hegdN',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g1eGS3P4y5DXpmrf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::20CfIADFs3wZmkaN',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1197 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bJ3xf80rZBzxA53U',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sOpMEqBpxC08muDM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ASZM16C5mp8o8fvc',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Rl0B6LmiLudjcWsX',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Hy3oVcUEWnPEXmj3',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bSdxvQj3fdYJNtkh',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1280 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Hkkgng1IGTscz8Zp',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1313 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KihdBZTEkrpK5qdY',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1342 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N0g3lhgFVwMRjwMO',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tTPGa0nEFpieE5VU',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xq28OKMmv3zpDjJ6',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kmjag3Sa8Tlieppp',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YvoJIxusOrHurB6o',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hlnxajTUN3LRbxok',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1408 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZWtw011WDBUmsI6d',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1431 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8e2w2BhiKKX9LXwJ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1462 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T8ZMNgtmVJdZkPWt',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1504 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fVf9uTr1xeW0X5CU',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1527 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x47xv0UkJ6Nz9E6n',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1562 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n6i7eOR6L8CXaGc4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1592 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MnTcuVa6OJKv6NTV',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1628 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'larecipe.search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manual/search-index/{version}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'BinaryTorch\\LaRecipe\\Http\\Controllers\\SearchController@__invoke',
        'controller' => 'BinaryTorch\\LaRecipe\\Http\\Controllers\\SearchController',
        'as' => 'larecipe.search',
        'namespace' => 'BinaryTorch\\LaRecipe\\Http\\Controllers',
        'prefix' => '/manual',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'larecipe.styles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manual/styles/{style}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'BinaryTorch\\LaRecipe\\Http\\Controllers\\StyleController@__invoke',
        'controller' => 'BinaryTorch\\LaRecipe\\Http\\Controllers\\StyleController',
        'as' => 'larecipe.styles',
        'namespace' => 'BinaryTorch\\LaRecipe\\Http\\Controllers',
        'prefix' => '/manual',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'larecipe.scripts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manual/scripts/{script}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'BinaryTorch\\LaRecipe\\Http\\Controllers\\ScriptController@__invoke',
        'controller' => 'BinaryTorch\\LaRecipe\\Http\\Controllers\\ScriptController',
        'as' => 'larecipe.scripts',
        'namespace' => 'BinaryTorch\\LaRecipe\\Http\\Controllers',
        'prefix' => '/manual',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'larecipe.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manual',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'BinaryTorch\\LaRecipe\\Http\\Controllers\\DocumentationController@index',
        'controller' => 'BinaryTorch\\LaRecipe\\Http\\Controllers\\DocumentationController@index',
        'as' => 'larecipe.index',
        'namespace' => 'BinaryTorch\\LaRecipe\\Http\\Controllers',
        'prefix' => '/manual',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'larecipe.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manual/{version}/{page?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'BinaryTorch\\LaRecipe\\Http\\Controllers\\DocumentationController@show',
        'controller' => 'BinaryTorch\\LaRecipe\\Http\\Controllers\\DocumentationController@show',
        'as' => 'larecipe.show',
        'namespace' => 'BinaryTorch\\LaRecipe\\Http\\Controllers',
        'prefix' => '/manual',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'page' => '(.*)',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BcJberOa8gzC3FwE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vapor/signed-storage-url',
      'action' => 
      array (
        'uses' => 'Laravel\\Vapor\\Contracts\\SignedStorageUrlController@store',
        'controller' => 'Laravel\\Vapor\\Contracts\\SignedStorageUrlController@store',
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::BcJberOa8gzC3FwE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h5Fswed6RbI4dteN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vapor-ui/api/logs/{group}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'vapor-ui',
        ),
        'uses' => 'Laravel\\VaporUi\\Http\\Controllers\\LogController@index',
        'controller' => 'Laravel\\VaporUi\\Http\\Controllers\\LogController@index',
        'namespace' => NULL,
        'prefix' => 'vapor-ui',
        'where' => 
        array (
        ),
        'as' => 'generated::h5Fswed6RbI4dteN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j5stey8ShuwZUhoj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vapor-ui/api/logs/{group}/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'vapor-ui',
        ),
        'uses' => 'Laravel\\VaporUi\\Http\\Controllers\\LogController@show',
        'controller' => 'Laravel\\VaporUi\\Http\\Controllers\\LogController@show',
        'namespace' => NULL,
        'prefix' => 'vapor-ui',
        'where' => 
        array (
        ),
        'as' => 'generated::j5stey8ShuwZUhoj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8VOtvZ1O3ST7cVk2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vapor-ui/api/jobs/metrics',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'vapor-ui',
        ),
        'uses' => 'Laravel\\VaporUi\\Http\\Controllers\\JobMetricController@index',
        'controller' => 'Laravel\\VaporUi\\Http\\Controllers\\JobMetricController@index',
        'namespace' => NULL,
        'prefix' => 'vapor-ui',
        'where' => 
        array (
        ),
        'as' => 'generated::8VOtvZ1O3ST7cVk2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4pZX0a9wiIkbolMi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vapor-ui/api/jobs/{group}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'vapor-ui',
        ),
        'uses' => 'Laravel\\VaporUi\\Http\\Controllers\\JobController@index',
        'controller' => 'Laravel\\VaporUi\\Http\\Controllers\\JobController@index',
        'namespace' => NULL,
        'prefix' => 'vapor-ui',
        'where' => 
        array (
        ),
        'as' => 'generated::4pZX0a9wiIkbolMi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Kvq4vuhaKjutqBSe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vapor-ui/api/jobs/{group}/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'vapor-ui',
        ),
        'uses' => 'Laravel\\VaporUi\\Http\\Controllers\\JobController@show',
        'controller' => 'Laravel\\VaporUi\\Http\\Controllers\\JobController@show',
        'namespace' => NULL,
        'prefix' => 'vapor-ui',
        'where' => 
        array (
        ),
        'as' => 'generated::Kvq4vuhaKjutqBSe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::voC3Qmf0Hbu8Ez0P' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vapor-ui/api/jobs/failed/retry/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'vapor-ui',
        ),
        'uses' => 'Laravel\\VaporUi\\Http\\Controllers\\JobController@retry',
        'controller' => 'Laravel\\VaporUi\\Http\\Controllers\\JobController@retry',
        'namespace' => NULL,
        'prefix' => 'vapor-ui',
        'where' => 
        array (
        ),
        'as' => 'generated::voC3Qmf0Hbu8Ez0P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v8TZ1mp6mPsfYCWe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'vapor-ui/api/jobs/failed/forget/{id}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'vapor-ui',
        ),
        'uses' => 'Laravel\\VaporUi\\Http\\Controllers\\JobController@forget',
        'controller' => 'Laravel\\VaporUi\\Http\\Controllers\\JobController@forget',
        'namespace' => NULL,
        'prefix' => 'vapor-ui',
        'where' => 
        array (
        ),
        'as' => 'generated::v8TZ1mp6mPsfYCWe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vapor-ui' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vapor-ui/{view?}',
      'action' => 
      array (
        'domain' => NULL,
        'middleware' => 
        array (
          0 => 'vapor-ui',
        ),
        'uses' => 'Laravel\\VaporUi\\Http\\Controllers\\HomeController@__invoke',
        'controller' => 'Laravel\\VaporUi\\Http\\Controllers\\HomeController',
        'namespace' => NULL,
        'prefix' => 'vapor-ui',
        'where' => 
        array (
        ),
        'as' => 'vapor-ui',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'view' => '(.*)',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dom8QN0fP3XHUl5S' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/presc/message/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@prescriberMessagesAdmin',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@prescriberMessagesAdmin',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::dom8QN0fP3XHUl5S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4wf0ZY02wmGdPFcj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patien/message/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@patientMessagesAdmin',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@patientMessagesAdmin',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::4wf0ZY02wmGdPFcj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XFMl7pi3OVPpM1df' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/export-excel/medicines',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExcelExportController@exportMedicamentos',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExcelExportController@exportMedicamentos',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::XFMl7pi3OVPpM1df',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'medicine.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/import-excel/medicines',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExcelExportController@importMedicamentos',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExcelExportController@importMedicamentos',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'medicine.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZAwHHalnLj3x8THN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/export-excel/usuarios',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExcelExportController@exportUsuarios',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExcelExportController@exportUsuarios',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ZAwHHalnLj3x8THN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lbVnRNAobibSw1jX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/export-excel/farmacias',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExcelExportController@exportFarmacias',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExcelExportController@exportFarmacias',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::lbVnRNAobibSw1jX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'farmacias.import' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/import-excel/farmacias',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ExcelExportController@importFarmacias',
        'controller' => 'App\\Http\\Controllers\\Admin\\ExcelExportController@importFarmacias',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'farmacias.import',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pyWCikA7hiPe1mev' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cep',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@cep',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@cep',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::pyWCikA7hiPe1mev',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wzxvTvZ8mxHFk8x6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/symptom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@cadastreSymptom',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@cadastreSymptom',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::wzxvTvZ8mxHFk8x6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UlRIFDyyHIaaAZx2' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/symptom/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@deleteSymptom',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@deleteSymptom',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::UlRIFDyyHIaaAZx2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3XB86qvM3AHLr8nf' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/symptom/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@editSymptom',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@editSymptom',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::3XB86qvM3AHLr8nf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kmxUDrNgRQz714e7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/medicine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::kmxUDrNgRQz714e7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y6oPxErSf1LzqHyj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/medicine/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@getMedicine',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@getMedicine',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Y6oPxErSf1LzqHyj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Fw7BRO0T3YTyZKSs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/all-medicines',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@getAllMedicine',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@getAllMedicine',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Fw7BRO0T3YTyZKSs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WGCUFGHKbMMrqny2' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/medicine/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@deleteMedicine',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@deleteMedicine',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::WGCUFGHKbMMrqny2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dulvR8lKTHBh4pzD' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/medicine/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@edit',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@edit',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::dulvR8lKTHBh4pzD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JlcjlLrXbt7Oa9uL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/diagnose',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::JlcjlLrXbt7Oa9uL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZvXMmcJNMsnv51kJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/diagnose',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@getAllDiagnoses',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@getAllDiagnoses',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ZvXMmcJNMsnv51kJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ln2DSeYtNpBhjop5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/diagnose/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@getDiagnose',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@getDiagnose',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Ln2DSeYtNpBhjop5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WtcAC6MFpgLZawxo' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/diagnose/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@deleteDiagnose',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@deleteDiagnose',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::WtcAC6MFpgLZawxo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gDQK38orEVlGbn8W' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/diagnose/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@editDiagnose',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@editDiagnose',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::gDQK38orEVlGbn8W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fpPCX57U46uI3J0p' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pharmacy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::fpPCX57U46uI3J0p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NYPiCpmOZUi3HGHX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/pharmacy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@getAllPharmacies',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@getAllPharmacies',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::NYPiCpmOZUi3HGHX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j5FM0Lbc1M60lQTk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/pharmacy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@getPharmacy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@getPharmacy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::j5FM0Lbc1M60lQTk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VIrVOHTOAty7b4Ir' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/pharmacy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@deletePharmacy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@deletePharmacy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::VIrVOHTOAty7b4Ir',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SlTStvttSkvY1BOz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pharmacy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@editPharmacy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@editPharmacy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::SlTStvttSkvY1BOz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1ONs0VitgEgy10pZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/treatment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::1ONs0VitgEgy10pZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mRrqVid0wGzbfAw6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/treatment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@getAllTreatments',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@getAllTreatments',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::mRrqVid0wGzbfAw6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Kmjag3Sa8Tlieppp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/treatment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@getTreatment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@getTreatment',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Kmjag3Sa8Tlieppp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YvoJIxusOrHurB6o' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/treatment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@deleteTreatment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@deleteTreatment',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::YvoJIxusOrHurB6o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hlnxajTUN3LRbxok' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/treatment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@editTreatment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@editTreatment',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::hlnxajTUN3LRbxok',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6PljslKpNVLVOodZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/permissao',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PermissaoController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PermissaoController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::6PljslKpNVLVOodZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pbzX8nu5NNJdCYel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/permissao',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PermissaoController@getAllPermissaos',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PermissaoController@getAllPermissaos',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::pbzX8nu5NNJdCYel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rMaecIPauahgt6MM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/permissao/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PermissaoController@getPermissao',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PermissaoController@getPermissao',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::rMaecIPauahgt6MM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TvV9W9j4LSf4USzV' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/permissao/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PermissaoController@deletePermissao',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PermissaoController@deletePermissao',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::TvV9W9j4LSf4USzV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PryPtuvVtclprXFR' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/permissao/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PermissaoController@editPermissao',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PermissaoController@editPermissao',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::PryPtuvVtclprXFR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1OQ80OzmjPLfRlKo' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/permissao-user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PermissaoController@editPermissaoUser',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PermissaoController@editPermissaoUser',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::1OQ80OzmjPLfRlKo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O24ZTxoSayaKT5pd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/documents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@uploadDocs',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@uploadDocs',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::O24ZTxoSayaKT5pd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ytxcsYckxOIPpOYw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/documents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@getDocuments',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@getDocuments',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ytxcsYckxOIPpOYw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uZmghwZ0omh8X3n9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/documents/status/cpf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@docsStatusCpf',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@docsStatusCpf',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::uZmghwZ0omh8X3n9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZWtw011WDBUmsI6d' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/crm-frente/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@downloadCRMFrente',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@downloadCRMFrente',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ZWtw011WDBUmsI6d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8e2w2BhiKKX9LXwJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/crm-verso/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@downloadCRMVerso',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@downloadCRMVerso',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::8e2w2BhiKKX9LXwJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2rfTV2R17N4yWZaZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/selfie-com-doc/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@downloadSelfieComDoc',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@downloadSelfieComDoc',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::2rfTV2R17N4yWZaZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::T8ZMNgtmVJdZkPWt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/foto-perfil/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@getFotoPerfil',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@getFotoPerfil',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::T8ZMNgtmVJdZkPWt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fVf9uTr1xeW0X5CU' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/valide/crm-frente/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@editCRMFrente',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@editCRMFrente',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::fVf9uTr1xeW0X5CU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x47xv0UkJ6Nz9E6n' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/valide/crm-verso/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@editCRMVerso',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@editCRMVerso',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::x47xv0UkJ6Nz9E6n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n6i7eOR6L8CXaGc4' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/valide/selfie-com-doc/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@editSelfieComDoc',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@editSelfieComDoc',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::n6i7eOR6L8CXaGc4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MnTcuVa6OJKv6NTV' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/valide/foto-perfil/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@editFotoPerfil',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@editFotoPerfil',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::MnTcuVa6OJKv6NTV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DEY7YnjYjW66eLex' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/foto-perfil',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@uploadFotoPerfil',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@uploadFotoPerfil',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::DEY7YnjYjW66eLex',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tzC3JfU1vOGjznYq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/foto-perfil',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@getFotoPerfilPatient',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@getFotoPerfilPatient',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::tzC3JfU1vOGjznYq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auth.google' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/auth/google',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@redirectToGoogle',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@redirectToGoogle',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'auth.google',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YbwocuBzFTJ5fWHp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/auth/google/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@handleGoogleCallback',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@handleGoogleCallback',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::YbwocuBzFTJ5fWHp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PbfHQFF95FyjsnO9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@login',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::PbfHQFF95FyjsnO9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KBEQsOjOVl1oGKzL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/signup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@signup',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@signup',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::KBEQsOjOVl1oGKzL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rmMUb4rrQd53JnUy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/recover-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\RecoverController@recoverPassword',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\RecoverController@recoverPassword',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::rmMUb4rrQd53JnUy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pb3BaaCP7P5ITplY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/confirm-recovery-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\RecoverController@confirmCode',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\RecoverController@confirmCode',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::pb3BaaCP7P5ITplY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PDtuOpN4pTGu8n9u' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/new-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\RecoverController@newPassword',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\RecoverController@newPassword',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::PDtuOpN4pTGu8n9u',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qgCEVZ1ucJKGjoSi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/new-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\RecoverController@sendNewCode',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\RecoverController@sendNewCode',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::qgCEVZ1ucJKGjoSi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k1XNvyx12IqUh4yJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/configs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ConfigsController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ConfigsController@store',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::k1XNvyx12IqUh4yJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::El6XkvimAg4Mltdp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/configs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ConfigsController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ConfigsController@show',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::El6XkvimAg4Mltdp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w2u0rBlwBGijEZf6' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/patient/configs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ConfigsController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ConfigsController@update',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::w2u0rBlwBGijEZf6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DfZgeu5P8Dxha016' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/set-treatment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@setTreatmentToPatient',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@setTreatmentToPatient',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::DfZgeu5P8Dxha016',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZR8hfooKbvLyFXgT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/get-treatments/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@getPatientTreatments',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@getPatientTreatments',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::ZR8hfooKbvLyFXgT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wRQH5rwQ8Oq5VRky' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@logout',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::wRQH5rwQ8Oq5VRky',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fT8XOWRHu9b0nsD2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/foto-perfil',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@uploadFotoPerfilPatient',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@uploadFotoPerfilPatient',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::fT8XOWRHu9b0nsD2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XhDAVDYdBaLnPG3n' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/foto-perfil',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@getFotoPerfilPatient',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@getFotoPerfilPatient',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::XhDAVDYdBaLnPG3n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CAFcv0cfvEyyh79P' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/patient/foto-perfil',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@deleteFotoPerfilPatient',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@deleteFotoPerfilPatient',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::CAFcv0cfvEyyh79P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4K5lDOTpRteipwU6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/patient-info/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@patientInfo',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@patientInfo',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::4K5lDOTpRteipwU6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::krNCiY4v2HkYkuii' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/patient/patient-info/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@editPatientInfo',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@editPatientInfo',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::krNCiY4v2HkYkuii',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h88yD3ei5JaHlUmk' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/patient/password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@editPassword',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@editPassword',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::h88yD3ei5JaHlUmk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mQ0Cwu84KhReWToj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/desativate-account/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@desativate',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@desativate',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::mQ0Cwu84KhReWToj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t7wvIOA3clfQPzV7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/delete-account/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@delete',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@delete',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::t7wvIOA3clfQPzV7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9eqiGYlVTcVHpGMi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/account-config/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@updateAccountConfig',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@updateAccountConfig',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::9eqiGYlVTcVHpGMi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::99lEUhFlRchGW1rt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/apn-token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@storeApnToken',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@storeApnToken',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::99lEUhFlRchGW1rt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EBMTSq8Ja1e8KqxK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/inform-med',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PatientUsesMedicineController@informMed',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PatientUsesMedicineController@informMed',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::EBMTSq8Ja1e8KqxK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6WCGQ88rpYmkCN0a' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/inform-med',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PatientUsesMedicineController@listInformedMed',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PatientUsesMedicineController@listInformedMed',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::6WCGQ88rpYmkCN0a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X5G00knsDXD9cOzR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/inform-symptoms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informSymptoms',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informSymptoms',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::X5G00knsDXD9cOzR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BuA42rXOFaqNIkbX' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/patient/informed-symptom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptomEdit',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptomEdit',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::BuA42rXOFaqNIkbX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qpS8zhUkpLWauEdq' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/patient/informed-symptom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptomDelete',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptomDelete',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::qpS8zhUkpLWauEdq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L9CGpFy9x1p51qeo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/informed-symptoms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptoms',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptoms',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::L9CGpFy9x1p51qeo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c4t6mpDyUEAi5Yyv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/informed-symptoms/week',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptomsLastWeek',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptomsLastWeek',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::c4t6mpDyUEAi5Yyv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5gqspDXWbNzYQYM1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/informed-symptoms/month',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptomsLastMonth',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptomsLastMonth',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::5gqspDXWbNzYQYM1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5O7A7afo8gzQ10AJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/informed-symptoms-count',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptomsCount',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptomsCount',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::5O7A7afo8gzQ10AJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HcCVdYtNMhWjkZIh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/inform-treatment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PatientInformTreatmentController@informTreatment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PatientInformTreatmentController@informTreatment',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::HcCVdYtNMhWjkZIh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pMZVZB1CMHj2HUVd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/follow-up',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@store',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::pMZVZB1CMHj2HUVd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HpnbFwQDB2YHbYMA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@message',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@message',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::HpnbFwQDB2YHbYMA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9kQ854476lkbTiXI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@readMessages',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@readMessages',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::9kQ854476lkbTiXI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BpokBjHoJ2zjxq1S' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/message/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@patientMessagesAdmin',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@patientMessagesAdmin',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::BpokBjHoJ2zjxq1S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ujvCnFE2CSB1qxO8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/message/patient',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@patientMessagesPrescriber',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@patientMessagesPrescriber',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::ujvCnFE2CSB1qxO8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XSuIqCt0CY2EUeL6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/medicine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@store',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::XSuIqCt0CY2EUeL6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pgmeUMbHsN4FaCnM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/medicine/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@getMedicine',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@getMedicine',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::pgmeUMbHsN4FaCnM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ts643vN8HKEyTw9M' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/all-medicines',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@getAllMedicine',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@getAllMedicine',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::ts643vN8HKEyTw9M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IBJyYOuF5FoeUytb' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/patient/medicine/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@deleteMedicine',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@deleteMedicine',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::IBJyYOuF5FoeUytb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ebv6i916yevbOXqw' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/patient/medicine/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@edit',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@edit',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::Ebv6i916yevbOXqw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::64rCtBqxbFJ6ZxRh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/reminder/medicine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@storeReminder',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@storeReminder',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::64rCtBqxbFJ6ZxRh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ikw02F5sbSBQj7hD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/reminder/medicine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@indexReminder',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@indexReminder',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::Ikw02F5sbSBQj7hD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zZu8YZAruEcTBHxg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/reminder/medicine/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@showReminder',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@showReminder',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::zZu8YZAruEcTBHxg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cvlfnYteAvXxwZym' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/patient/reminder/medicine/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@updateReminder',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@updateReminder',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::cvlfnYteAvXxwZym',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CmoxmsvIfgJ7sde3' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/patient/reminder/medicine/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@destroyReminder',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@destroyReminder',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::CmoxmsvIfgJ7sde3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Uai2cbqVsCIYqPR4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/treatment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@store',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::Uai2cbqVsCIYqPR4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6LmwISdfOLDhEz7g' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/treatment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@getAllTreatments',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@getAllTreatments',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::6LmwISdfOLDhEz7g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VHaRidgTPUH0Pz43' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/treatment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@getTreatment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@getTreatment',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::VHaRidgTPUH0Pz43',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cEnYBmCVkEIe4gz5' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/patient/treatment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@deleteTreatment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@deleteTreatment',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::cEnYBmCVkEIe4gz5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oM6zKzvhNMjQ8tdT' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/patient/treatment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@editTreatment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@editTreatment',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::oM6zKzvhNMjQ8tdT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::49STdt8TmQsMWMoq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/diagnose',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@store',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::49STdt8TmQsMWMoq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::omCMCPAj3MKjWusp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/diagnose',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@getAllDiagnoses',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@getAllDiagnoses',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::omCMCPAj3MKjWusp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SFGQWEVV8iXPaweE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/diagnose/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@getDiagnose',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@getDiagnose',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::SFGQWEVV8iXPaweE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JodX4AXtp18MsVYW' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/patient/diagnose/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@deleteDiagnose',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@deleteDiagnose',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::JodX4AXtp18MsVYW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ltnMMbLpg2LRfgPR' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/patient/diagnose/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@editDiagnose',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@editDiagnose',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::ltnMMbLpg2LRfgPR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YCVFnQx4HAsxtJVr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/new-treatment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@store',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::YCVFnQx4HAsxtJVr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fxvpUvTvq5osdZHM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/all-newtreatments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@getAllTreatment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@getAllTreatment',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::fxvpUvTvq5osdZHM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K3P96PjkQ9M4xt7g' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/new-treatment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@show',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::K3P96PjkQ9M4xt7g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N4rkpMvPzCK2YZRO' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/patient/new-treatment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::N4rkpMvPzCK2YZRO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2m2ynyBmhHLfeITa' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/patient/new-treatment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@update',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::2m2ynyBmhHLfeITa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t2qTOta2jn0dSeq8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@loginPrescriber',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@loginPrescriber',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::t2qTOta2jn0dSeq8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sxoJV7QRnW3TwuAF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/signup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@signupPrescriber',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@signupPrescriber',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::sxoJV7QRnW3TwuAF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YHgT8jPpBZTAbzq3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/recover-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\RecoverController@recoverPasswordPresc',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\RecoverController@recoverPasswordPresc',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::YHgT8jPpBZTAbzq3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1KTMAJLffDTOGaR1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/confirm-recovery-code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\RecoverController@confirmCodePresc',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\RecoverController@confirmCodePresc',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::1KTMAJLffDTOGaR1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J1bNc3DANKQupGbr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/new-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\RecoverController@newPasswordPresc',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\RecoverController@newPasswordPresc',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::J1bNc3DANKQupGbr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3Pnk3cQQlFUi1VSO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/configs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ConfigsController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ConfigsController@store',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::3Pnk3cQQlFUi1VSO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3DBnguPDfgFsw7Uv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/configs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ConfigsController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ConfigsController@show',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::3DBnguPDfgFsw7Uv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zaySvEeMQ5pe7ZOA' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/prescriber/configs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\ConfigsController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\ConfigsController@update',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::zaySvEeMQ5pe7ZOA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MfMoUn6IKtNZ3SjR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/documents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@uploadDocs',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@uploadDocs',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::MfMoUn6IKtNZ3SjR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9XNROOOAFiuniREZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/documents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@getDocuments',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@getDocuments',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::9XNROOOAFiuniREZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::enafVSVsLhaideMQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/foto-perfil',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@uploadFotoPerfilPresc',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@uploadFotoPerfilPresc',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::enafVSVsLhaideMQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Y0jyQ5vgXAP8CQPf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/foto-perfil',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@getFotoPerfilPrescriber',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@getFotoPerfilPrescriber',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::Y0jyQ5vgXAP8CQPf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::U2qf72get6uq9ZRS' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/prescriber/foto-perfil',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@deleteFotoPerfilPrescriber',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@deleteFotoPerfilPrescriber',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::U2qf72get6uq9ZRS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1Wfrm3ArHJqp90Sr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@logoutPresc',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@logoutPresc',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::1Wfrm3ArHJqp90Sr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GQFcDHzBpeX91gwg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/prescriber-info/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@prescInfo',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@prescInfo',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::GQFcDHzBpeX91gwg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LtXpwIgbzEPh1ELJ' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/prescriber/prescriber-info/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@editPrescInfo',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@editPrescInfo',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::LtXpwIgbzEPh1ELJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lkM0oLcQEurks4SL' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/prescriber/patient-info/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@editPatientInfo',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@editPatientInfo',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::lkM0oLcQEurks4SL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DtFay7ti05ZsNqgx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/desativate-account/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\PrescriberController@desativate',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\PrescriberController@desativate',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::DtFay7ti05ZsNqgx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AlWBEw7ds4v465OH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/delete-account/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\PrescriberController@delete',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\PrescriberController@delete',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::AlWBEw7ds4v465OH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z40nGgQbxeJQD4fy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/apn-token',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\PrescriberController@storeApnToken',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\PrescriberController@storeApnToken',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::Z40nGgQbxeJQD4fy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MfQzzKnykOowrEKC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/all-medicines',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@getAllMedicine',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@getAllMedicine',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::MfQzzKnykOowrEKC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cEoOTwnSDVZolG4c' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/medicine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@store',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::cEoOTwnSDVZolG4c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f2ieQh743A7hegdN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/medicine/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@getMedicine',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@getMedicine',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::f2ieQh743A7hegdN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g1eGS3P4y5DXpmrf' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/prescriber/medicine/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@deleteMedicine',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@deleteMedicine',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::g1eGS3P4y5DXpmrf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::20CfIADFs3wZmkaN' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/prescriber/medicine/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@edit',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@edit',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::20CfIADFs3wZmkaN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6wJ62aw2KgR0pXRz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/treatment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@store',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::6wJ62aw2KgR0pXRz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4XqcOYnODndzt2lA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/treatment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@getAllTreatments',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@getAllTreatments',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::4XqcOYnODndzt2lA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bJ3xf80rZBzxA53U' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/treatment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@getTreatment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@getTreatment',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::bJ3xf80rZBzxA53U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sOpMEqBpxC08muDM' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/prescriber/treatment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@deleteTreatment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@deleteTreatment',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::sOpMEqBpxC08muDM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ASZM16C5mp8o8fvc' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/prescriber/treatment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@editTreatment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@editTreatment',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::ASZM16C5mp8o8fvc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2WxFwStIPFXyE9TI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/new-treatment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@storePresc',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@storePresc',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::2WxFwStIPFXyE9TI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N0FludREfc5G7NLO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/all-newtreatments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@getAllTreatmentPresc',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@getAllTreatmentPresc',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::N0FludREfc5G7NLO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rl0B6LmiLudjcWsX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/new-treatment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@showPresc',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@showPresc',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::Rl0B6LmiLudjcWsX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hy3oVcUEWnPEXmj3' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/prescriber/new-treatment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@destroyPresc',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@destroyPresc',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::Hy3oVcUEWnPEXmj3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bSdxvQj3fdYJNtkh' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/prescriber/new-treatment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@updatePresc',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@updatePresc',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::bSdxvQj3fdYJNtkh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MMOTCX4H0WFQFDAS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/diagnose',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@store',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::MMOTCX4H0WFQFDAS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zNZqtR0sSTOPDoPl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/diagnose',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@getAllDiagnoses',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@getAllDiagnoses',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::zNZqtR0sSTOPDoPl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GTXVFfbTAM1aj8iN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/diagnose/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@getDiagnose',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@getDiagnose',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::GTXVFfbTAM1aj8iN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GNz2VMWzV8VSV7UE' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/prescriber/diagnose/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@deleteDiagnose',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@deleteDiagnose',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::GNz2VMWzV8VSV7UE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bgX1B2b4nGokaETc' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/prescriber/diagnose/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@editDiagnose',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@editDiagnose',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::bgX1B2b4nGokaETc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eOu8IeZQrdUbDoD9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/inform-med',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PatientUsesMedicineController@listInformedMedPresc',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PatientUsesMedicineController@listInformedMedPresc',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::eOu8IeZQrdUbDoD9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S7oFNHcJzXNaztL6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/informed-symptoms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptomsPresc',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptomsPresc',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::S7oFNHcJzXNaztL6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zI0nWRjy0Krqmvkc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/informed-symptoms/week',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptomsPrescLastWeek',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptomsPrescLastWeek',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::zI0nWRjy0Krqmvkc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jzQERLR3lCq4clri' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/message/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@prescriberMessagesAdmin',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@prescriberMessagesAdmin',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::jzQERLR3lCq4clri',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uzHOC4CZPtqDMCCC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/message/patient',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@prescriberMessagesPatient',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@prescriberMessagesPatient',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::uzHOC4CZPtqDMCCC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qAkiDriCQskNCDB0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/message',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@readMessages',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@readMessages',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::qAkiDriCQskNCDB0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Oxzz8c4YFR8SerMr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/create-patient',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@createPatientUsingPrescriber',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@createPatientUsingPrescriber',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::Oxzz8c4YFR8SerMr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sg2U4pexWvg0pw5a' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/find-patient',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@findPatientByCpf',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@findPatientByCpf',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::sg2U4pexWvg0pw5a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::C1PwLRVx89n6o9j7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/connect-patient',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@connectPrescriberToPatient',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@connectPrescriberToPatient',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::C1PwLRVx89n6o9j7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hkkgng1IGTscz8Zp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/erase-connected-patient/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@errasePrescriberInPatient',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@errasePrescriberInPatient',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::Hkkgng1IGTscz8Zp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eHk1b4kUlnMUGiGV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/treatment-with-patient',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@treatmentWithPatient',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@treatmentWithPatient',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::eHk1b4kUlnMUGiGV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1BngOGwBRVHVMtbO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/patients-with-treatments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\PrescriberController@getPrescriberPatientsWithTreatments',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\PrescriberController@getPrescriberPatientsWithTreatments',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::1BngOGwBRVHVMtbO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NUPRvDMvLrLsoFV6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/count/patients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\PrescriberController@countPatients',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\PrescriberController@countPatients',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::NUPRvDMvLrLsoFV6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::R22s8orlXzPnHzqU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/get-availability',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AvailabilityController@getAvailability',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AvailabilityController@getAvailability',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::R22s8orlXzPnHzqU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EfqUPgnseq3Tz0fs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/create-availability',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AvailabilityController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AvailabilityController@store',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::EfqUPgnseq3Tz0fs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OSWPBinjREIjzg7X' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/vouchers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@getVoucher',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@getVoucher',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::OSWPBinjREIjzg7X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N0g3lhgFVwMRjwMO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/voucher/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@getVoucherPerId',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@getVoucherPerId',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::N0g3lhgFVwMRjwMO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hbXwAgD9bL2r7l3h' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/voucher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@createVoucher',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@createVoucher',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::hbXwAgD9bL2r7l3h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tTPGa0nEFpieE5VU' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/prescriber/voucher/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@updateVoucher',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@updateVoucher',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::tTPGa0nEFpieE5VU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xq28OKMmv3zpDjJ6' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/prescriber/voucher/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@deleteVoucher',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@deleteVoucher',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::Xq28OKMmv3zpDjJ6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TGNek4vjPaCdm9o1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/use-voucher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@useVoucher',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@useVoucher',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::TGNek4vjPaCdm9o1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oOYnh4BuAaNTSd61' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/clinic-adress',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\ClinicAdressController@getClinicAdress',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\ClinicAdressController@getClinicAdress',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::oOYnh4BuAaNTSd61',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2DDQRh3BdyV7507q' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/clinic-adress',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\ClinicAdressController@createClinicAdress',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\ClinicAdressController@createClinicAdress',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::2DDQRh3BdyV7507q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H2IqICZ59Wls79qQ' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/prescriber/clinic-adress',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\ClinicAdressController@updateClinicAdress',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\ClinicAdressController@updateClinicAdress',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::H2IqICZ59Wls79qQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PTIUe590jmwLxcZW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/create-appointment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AppointmentController@createAppointment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AppointmentController@createAppointment',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::PTIUe590jmwLxcZW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XPYrKMvDGam2xo0Y' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/prescriber/drop-appointment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AppointmentController@dropAppointment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AppointmentController@dropAppointment',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::XPYrKMvDGam2xo0Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aQIVLQ4IkLTpDXEA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/next-appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AppointmentController@nextAppointments',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AppointmentController@nextAppointments',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::aQIVLQ4IkLTpDXEA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ayqeR5bZzqXcuSPC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/past-appointments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AppointmentController@pastAppointments',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AppointmentController@pastAppointments',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::ayqeR5bZzqXcuSPC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KihdBZTEkrpK5qdY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/end-appointment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AppointmentController@endAppointment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AppointmentController@endAppointment',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::KihdBZTEkrpK5qdY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QCnc8tW3LjLYtpqx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/produto-indicado',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StatisticsController@showProdutoIndicadoPorDiagnostico',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StatisticsController@showProdutoIndicadoPorDiagnostico',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::QCnc8tW3LjLYtpqx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GNwXfafSESIeoQcB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/percepcao-melhora/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StatisticsController@showPercepcaoDeMelhora',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StatisticsController@showPercepcaoDeMelhora',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::GNwXfafSESIeoQcB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nUqIEdNkAFdUmuEw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/symptoms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@listSymptoms',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@listSymptoms',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::nUqIEdNkAFdUmuEw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g7o4DHBQrIXULg0Y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/symptom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@cadastreSymptom',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@cadastreSymptom',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::g7o4DHBQrIXULg0Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mNWVeyctys9RUIqc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cadastro-sintomas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@cadastroSintomas',
        'controller' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@cadastroSintomas',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::mNWVeyctys9RUIqc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rddC3tNbXNEm9pFy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cadastro-medicamentos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@cadastroMedicamentos',
        'controller' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@cadastroMedicamentos',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::rddC3tNbXNEm9pFy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BBSHQ88ofbFdkzTv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'cadastro-diagnosticos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@cadastroDiagnosticos',
        'controller' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@cadastroDiagnosticos',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::BBSHQ88ofbFdkzTv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6ur0igVj4ZQ9IDpL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'validacao-documentos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@validacaoDocumentos',
        'controller' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@validacaoDocumentos',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::6ur0igVj4ZQ9IDpL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KWtOlR4lD3q6B5Yi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'config-pushs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@configPushs',
        'controller' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@configPushs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KWtOlR4lD3q6B5Yi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WBiTFL8b0fAV3ics' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'farmacias-parceiras',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@farmaciasParceiras',
        'controller' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@farmaciasParceiras',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WBiTFL8b0fAV3ics',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WEtPPsVCY2GaFsGl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'usuarios',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@usuarios',
        'controller' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@usuarios',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::WEtPPsVCY2GaFsGl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZWF1jYGSyABzelV2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'desconto-promocao',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@descontoPromocao',
        'controller' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@descontoPromocao',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::ZWF1jYGSyABzelV2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zAm6aDuMn2ZB7WND' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'extracaodados',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@extracaoDados',
        'controller' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@extracaoDados',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::zAm6aDuMn2ZB7WND',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kOiko7dyHmE6kyL8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'permissoes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@permissoes',
        'controller' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@permissoes',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::kOiko7dyHmE6kyL8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mensagens' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'mensagens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@mensagens',
        'controller' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@mensagens',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'mensagens',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FJXmAgRdh261uMDq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'listar-usuarios',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@listarUsuarios',
        'controller' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@listarUsuarios',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FJXmAgRdh261uMDq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l9fVHNZqgjiE75Fb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:50:"function () {
        return \\view(\'login\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000004cd0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::l9fVHNZqgjiE75Fb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@edit',
        'controller' => 'App\\Http\\Controllers\\ProfileController@edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profile.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@update',
        'controller' => 'App\\Http\\Controllers\\ProfileController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profile.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProfileController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profile.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4XtSjRLcjaq911TT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::4XtSjRLcjaq911TT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nhPu0s0PID9ddPIw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::nhPu0s0PID9ddPIw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\PasswordResetLinkController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reset-password/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@create',
        'controller' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.notice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify-email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.notice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'verify-email/{id}/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'signed',
          3 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'verification.send' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'email/verification-notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmailVerificationNotificationController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'verification.send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'confirm-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@show',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@show',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LYT9kLhhV7SjeccO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'confirm-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::LYT9kLhhV7SjeccO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\PasswordController@update',
        'controller' => 'App\\Http\\Controllers\\Auth\\PasswordController@update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@destroy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
