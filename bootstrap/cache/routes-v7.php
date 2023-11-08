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
            '_route' => 'generated::DE71Av8AHnclPXkS',
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
            '_route' => 'generated::mlZlgMerrfOd3i4r',
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
            '_route' => 'generated::EaydGIab0CVzm7WJ',
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
            '_route' => 'generated::gSiuqCEeLyS9rkUw',
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
            '_route' => 'generated::CGOLfbpTSzudXVtv',
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
            '_route' => 'generated::jlQKNIZGXcZX8hyM',
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
            '_route' => 'generated::aBhAYNjW4arUX9Bg',
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
            '_route' => 'generated::R00FCmKDdRjw6IvK',
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
            '_route' => 'generated::7E87GReCqS295T5S',
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
            '_route' => 'generated::sayNn3oKt8wQsdkC',
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
            '_route' => 'generated::85uWbiDvfJuzFKhA',
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
            '_route' => 'generated::dzAxZix91bbAmYXG',
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
            '_route' => 'generated::vVF4H8SkdfVYPaaK',
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
            '_route' => 'generated::muWemImkLQn837bc',
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
            '_route' => 'generated::kUd9xzoZvXOa5eU6',
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
            '_route' => 'generated::A231AOLaorLgu7MG',
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
            '_route' => 'generated::T9FBTNPIofTCb9t5',
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
            '_route' => 'generated::qFWKg0vHgxHPBLfV',
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
            '_route' => 'generated::GkRWuf4CzrP5bZAx',
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
            '_route' => 'generated::osIIuLYsYAhibXAI',
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
            '_route' => 'generated::6fRQBohBLX2kycOk',
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
            '_route' => 'generated::b1ADtHcqZytyLm7D',
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
            '_route' => 'generated::AH0FS1PaZpys9ZWb',
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
            '_route' => 'generated::zkUEf9OVWDDJwzIU',
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
            '_route' => 'generated::UntcNQNJEUrzQO2y',
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
            '_route' => 'generated::oEyjj0rkZosvCf4g',
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
            '_route' => 'generated::CZCwnBGrY4GDGlsi',
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
            '_route' => 'generated::Yz2L6U2gq5vR5jYl',
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
            '_route' => 'generated::M72TcvjVR9gSYMsD',
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
            '_route' => 'generated::NFgitMrxrMYQLtRt',
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
            '_route' => 'generated::NOyoJJLFk7fJwwAC',
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
            '_route' => 'generated::9M2RLnp03gY2BnIH',
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
            '_route' => 'generated::73ZqvQd66OozJTBL',
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
            '_route' => 'generated::T9G1ZyTP4jCO3djV',
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
            '_route' => 'generated::wuEmZx7KvL3X4iq0',
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
            '_route' => 'generated::xZ11Dyq70t302IjQ',
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
            '_route' => 'generated::t1THjdOZTEu0gmE6',
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
            '_route' => 'generated::lipYbiyp4OACrfjh',
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
            '_route' => 'generated::IG6ExvVMkaQREE7t',
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
            '_route' => 'generated::13cYvFMJU3CmBv5j',
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
            '_route' => 'generated::UJa5ceqOEQYIBdeA',
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
            '_route' => 'generated::1BvoqcLX2DEUBFNl',
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
            '_route' => 'generated::uZKlkBRfV19jARn9',
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
            '_route' => 'generated::EwrhZcSvV2AyeGqG',
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
            '_route' => 'generated::3UNoHvP6YcXjLs0u',
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
            '_route' => 'generated::x0c3jjStinWJ5Co4',
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
            '_route' => 'generated::ZC21Tx0zH0kDzAEb',
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
            '_route' => 'generated::TlNcKDXrapZEd43K',
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
            '_route' => 'generated::XGwt0IHb2c034ji3',
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
            '_route' => 'generated::ukbIAajKTaCf1JL0',
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
            '_route' => 'generated::P670vDfwTiPGa8FW',
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
            '_route' => 'generated::2H0MGWQGBbHxiBv1',
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
            '_route' => 'generated::i54fn8EjOOU8hPck',
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
            '_route' => 'generated::zu65BTUxvKexZSlq',
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
            '_route' => 'generated::hWGgn4suNlvsazJP',
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
            '_route' => 'generated::yAIjzhwKx7H9YcMu',
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
            '_route' => 'generated::a5YrUStZA9fDC97y',
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
            '_route' => 'generated::F3axU7Ztbxjt9yME',
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
            '_route' => 'generated::f82wMi6HN6VSAQtf',
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
            '_route' => 'generated::yoEsWIMw4LNHmpzB',
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
            '_route' => 'generated::Jt6E563BoQBjihlh',
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
            '_route' => 'generated::H1PhekTnihGVddsz',
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
            '_route' => 'generated::o7Ba9KEkIv2qpsZB',
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
      '/api/patient/pharmacy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WEMLbxbxg7mitEs1',
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
            '_route' => 'generated::eYdOFLGRS4T1c4zS',
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
            '_route' => 'generated::M7LCH0XtpGh05RUm',
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
            '_route' => 'generated::2MDQM5Qa5KqggDV7',
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
            '_route' => 'generated::xc3sdiarWrJ4mj06',
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
            '_route' => 'generated::sO7YPwnF7928EMMq',
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
            '_route' => 'generated::2wPApLBFU2qlNegp',
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
            '_route' => 'generated::3MLS4TZo39fbw5qm',
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
            '_route' => 'generated::tEAvoUuW1ZRuvUqn',
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
            '_route' => 'generated::KvC01u89O2xOdQrt',
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
            '_route' => 'generated::icUHjdYFJItWTO12',
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
            '_route' => 'generated::RyXe9RJC4Vwv1N5T',
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
            '_route' => 'generated::ta1rklWe6OKqyaaP',
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
            '_route' => 'generated::949Rdpl6tbgnlWLn',
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
            '_route' => 'generated::zLhiSDDu7ZrrIXBj',
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
            '_route' => 'generated::7LSgFIHFmE6bufO5',
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
            '_route' => 'generated::f82Xa4Fe6D4i3qQV',
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
            '_route' => 'generated::YPGpSeUgaEfA46lE',
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
            '_route' => 'generated::RaIk7jhLqDqV29DG',
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
            '_route' => 'generated::Qfyeiq5KbHlpG91X',
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
            '_route' => 'generated::iFcrn9nqohQiGnI7',
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
            '_route' => 'generated::ql6oEPdbFQMUHyZg',
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
            '_route' => 'generated::s19tMlQ6lwzDQ3Rs',
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
            '_route' => 'generated::T1bH0ii0Si2Gr41S',
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
            '_route' => 'generated::ZbmROg0mgYML45Ys',
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
      '/api/prescriber/pharmacy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1BsSrBDnC9y5bfmB',
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
            '_route' => 'generated::Y7CaEjpvB5qwogmT',
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
            '_route' => 'generated::1i3Ix7771zDUU99Q',
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
            '_route' => 'generated::s64IxNDMSHVOxzoY',
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
            '_route' => 'generated::rHW00klh7oDznMp8',
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
            '_route' => 'generated::icmgo2sWQbaVuPCm',
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
            '_route' => 'generated::lbC50xBpVBngAnXS',
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
            '_route' => 'generated::wCZcpGZ98WA7RZdW',
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
      '/api/prescriber/informed-symptoms/period' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wkuADxbLoxbHfJvo',
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
            '_route' => 'generated::XvgaLjOL5ciAPVOx',
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
            '_route' => 'generated::dspH08BrB6esKPvL',
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
            '_route' => 'generated::LK9G6BPRAofRviGP',
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
            '_route' => 'generated::Yyg7IKkXUPkeJ1ky',
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
            '_route' => 'generated::aS5iRMQO3mSTSIiy',
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
            '_route' => 'generated::hPEqZpAjqLurSC2j',
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
            '_route' => 'generated::inFdznIDS9edTK3Y',
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
            '_route' => 'generated::oZ2PWMaaRJmKRGBF',
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
            '_route' => 'generated::RyaOQ4EoTPEY1jvS',
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
            '_route' => 'generated::hpjSIssCxPJ9chEJ',
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
            '_route' => 'generated::SUf5wHRAIr0NtNvd',
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
            '_route' => 'generated::mPATwEnpyWkuJXN8',
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
            '_route' => 'generated::liU2JOvlqSHrLntB',
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
            '_route' => 'generated::lSX3ijk11SOuIltJ',
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
            '_route' => 'generated::gvcELnDAR09ZHRQS',
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
            '_route' => 'generated::dRz3jI3LAd2LVy3a',
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
            '_route' => 'generated::B80ez6qSRoRa89HL',
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
            '_route' => 'generated::XNiyjy6NpmzG3mqL',
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
            '_route' => 'generated::ctZh0n6Y8FzfyLp2',
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
            '_route' => 'generated::9orZLFcMbTcBHvZB',
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
            '_route' => 'generated::Ke6H5vuSoh9Nebgb',
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
            '_route' => 'generated::GgzdPQ4lXmTFOsHk',
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
            '_route' => 'generated::aRIMjFCtRFt7a569',
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
            '_route' => 'generated::DySB9GTwQP8S6r2Y',
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
            '_route' => 'generated::pWwGQ7bJUmhSQ4Sz',
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
            '_route' => 'generated::hGWnykodsf8Fx8hT',
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
            '_route' => 'generated::v4iPCCopvQHrgr5W',
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
            '_route' => 'generated::DF6dJ5PJnFA5aOdU',
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
            '_route' => 'generated::7xGmEkitgIAvehel',
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
            '_route' => 'generated::ZSPwvCmBv4xdNmWy',
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
            '_route' => 'generated::52wu9b4upPSNoUI3',
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
            '_route' => 'generated::PEmBRUOuOaIOQy61',
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
            '_route' => 'generated::k7GAnXzx3RoUHhnn',
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
            '_route' => 'generated::5ps7S5mXRxmerzzR',
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
            '_route' => 'generated::1HBO5R1FJ21cjDtz',
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
            '_route' => 'generated::IldsQ8eW7cHh1Qrd',
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
            '_route' => 'generated::mDJON6RqfroQ27iF',
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
            '_route' => 'generated::DEO9H1e0cJHHwBga',
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
            '_route' => 'generated::56C0FkRl5rJAbcaP',
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
      0 => '{^(?|/manual/(?|s(?|earch\\-index/([^/]++)(*:43)|tyles/([^/]++)(*:64)|cripts/([^/]++)(*:86))|([^/]++)(?:/((?:.*)))?(*:116))|/v(?|apor\\-ui(?|/api/(?|logs/([^/]++)(?|(*:165)|/([^/]++)(*:182))|jobs/(?|([^/]++)(?|(*:210)|/([^/]++)(*:227))|failed/(?|retry/([^/]++)(*:260)|forget/([^/]++)(*:283))))|(?:/((?:.*)))?(*:308))|erify\\-email/([^/]++)/([^/]++)(*:347))|/api/(?|s(?|ymptom/([^/]++)(?|(*:386))|elfie\\-com\\-doc/([^/]++)(*:419))|medicine/([^/]++)(?|(*:448))|diagnose/([^/]++)(?|(*:477))|p(?|harmacy/([^/]++)(?|(*:509))|ermissao/([^/]++)(?|(*:538))|atient/(?|get\\-treatments/([^/]++)(*:581)|p(?|atient\\-info/([^/]++)(?|(*:617))|harmacy/([^/]++)(?|(*:645)))|d(?|e(?|sativate\\-account/([^/]++)(*:689)|lete\\-account/([^/]++)(*:719))|iagnose/([^/]++)(?|(*:747)))|account\\-config/([^/]++)(*:781)|medicine/([^/]++)(?|(*:809))|reminder/medicine/([^/]++)(?|(*:847))|treatment/([^/]++)(?|(*:877))|new\\-treatment/([^/]++)(?|(*:912)))|rescriber/(?|p(?|rescriber\\-info/([^/]++)(?|(*:966))|atient\\-info/([^/]++)(*:996)|harmacy/([^/]++)(?|(*:1023))|ercepcao\\-melhora/([^/]++)(*:1059))|d(?|e(?|sativate\\-account/([^/]++)(*:1103)|lete\\-account/([^/]++)(*:1134))|iagnose/([^/]++)(?|(*:1163))|rop\\-appointment/([^/]++)(*:1198))|medicine/([^/]++)(?|(*:1228))|treatment/([^/]++)(?|(*:1259))|new\\-treatment/([^/]++)(?|(*:1295))|e(?|rase\\-connected\\-patient/([^/]++)(*:1342)|nd\\-appointment/([^/]++)(*:1375))|voucher/([^/]++)(?|(*:1404))))|treatment/([^/]++)(?|(*:1437))|crm\\-(?|frente/([^/]++)(*:1470)|verso/([^/]++)(*:1493))|foto\\-perfil/([^/]++)(*:1524)|valide/(?|crm\\-(?|frente/([^/]++)(*:1566)|verso/([^/]++)(*:1589))|selfie\\-com\\-doc/([^/]++)(*:1624)|foto\\-perfil/([^/]++)(*:1654)))|/reset\\-password/([^/]++)(*:1690))/?$}sDu',
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
            '_route' => 'generated::cIklaGwAOxR1ygOt',
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
            '_route' => 'generated::xbKRYE7fZgEeOHkL',
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
            '_route' => 'generated::lAnNQAbjoCUvZEjw',
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
            '_route' => 'generated::e5jga0JucEpURIgI',
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
            '_route' => 'generated::NRV7BCrmnSHKazfg',
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
            '_route' => 'generated::Yc4lNGh1wSXzlThc',
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
            '_route' => 'generated::yvYWNuFoiSvfseFL',
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
            '_route' => 'generated::NFuVMKvyfXIbRDFd',
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
            '_route' => 'generated::5IrNrdjQaKg3ZdZK',
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
            '_route' => 'generated::7zodLVr0SKevbBR0',
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
            '_route' => 'generated::ab6PIfpusaQ7N527',
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
            '_route' => 'generated::Q4i7601EmVgJ4ti1',
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
            '_route' => 'generated::hlebQgbqJjM4AtBP',
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
            '_route' => 'generated::FdKwlgJ7713mE4GI',
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
            '_route' => 'generated::wWfiuwHL0Lku0DFY',
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
            '_route' => 'generated::1pnZK3Xx2AAp4EoI',
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
            '_route' => 'generated::iLKsXoPB1vu7cXqi',
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
            '_route' => 'generated::R7YIpl6Yr3gij9Pj',
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
            '_route' => 'generated::krRy1ZJduPHcpL6J',
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
            '_route' => 'generated::vhMLUWAqyDEUBjt1',
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
            '_route' => 'generated::Hnn0IJUMlqiGHttC',
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
            '_route' => 'generated::UXitQBk0GHvRNESA',
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
      617 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tyZQisFXTxawHq6G',
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
            '_route' => 'generated::8OotvABBSqxfbGGA',
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
      645 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::M1smZ7Nuvdcv3ylj',
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
            '_route' => 'generated::bJOghEjmFtUfyykN',
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
            '_route' => 'generated::u7FDK6K0AgLmlZno',
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
      689 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9f29zdVVIQilas07',
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
      719 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SMxWsuLyUeoE9K4i',
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
      747 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QOuZ2QTSXNgUsb36',
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
            '_route' => 'generated::L8dMEZkeohj4D8nA',
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
            '_route' => 'generated::klXqvzPd4J74XfB2',
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
      781 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::760v5x4JFMebt7Pb',
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
      809 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Qbpd4UA0ePiL4yrS',
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
            '_route' => 'generated::PyGYvQYPKbPc6Osm',
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
            '_route' => 'generated::n1SWxBfujFRisdx0',
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
      847 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WOAh1O5NFrQFf0q7',
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
            '_route' => 'generated::ZU8pdXjUNlZF9YVF',
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
            '_route' => 'generated::ylctj8lHK5hiAiNM',
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
      877 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YiGEV2ts9chgiIo7',
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
            '_route' => 'generated::di1VFUHzUSuTz5U4',
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
            '_route' => 'generated::qygJ4sNOb5AbSmfW',
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
      912 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QjMsKH7jWL9EySTx',
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
            '_route' => 'generated::vJ9aWkjHlNtNVLwQ',
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
            '_route' => 'generated::SML9pz5MguzsV5IG',
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
      966 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9guK3iQhoLpN6Ebx',
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
            '_route' => 'generated::MzYEaoxDbMZsvhoL',
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
      996 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aOArqcMgovLDwfOq',
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
      1023 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SNeFuB3WJX2utxpW',
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
            '_route' => 'generated::aY6UgpfDDrLZquIB',
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
            '_route' => 'generated::ubGyuH30GbZYRpOD',
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
      1059 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hHFvBoYwTs05Htw1',
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
      1103 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QcXemgL8MugGRcTY',
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
      1134 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JvQuA7RSOZ6bMHAz',
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
      1163 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Enu6FbnnbLZT6iAy',
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
            '_route' => 'generated::LNXjmXSZyUblHAVs',
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
            '_route' => 'generated::9OQJYsRTKNklbKrv',
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
      1198 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Po8BcRvumN5kxCXs',
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
      1228 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x2fqTNcCYlWmf4UF',
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
            '_route' => 'generated::CeacTLLdPpVJUqMT',
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
            '_route' => 'generated::sD99JNiUw0rOewzr',
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
      1259 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::24ECOpw4tI5uPwA0',
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
            '_route' => 'generated::yo9oITuXFKFV0WHe',
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
            '_route' => 'generated::NhnXk0dXB7X3Kz7Y',
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
      1295 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ycW89kCSLDJcvoQS',
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
            '_route' => 'generated::0muiFX7NfwbXOLTI',
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
            '_route' => 'generated::vszJRwXLTinZrsQt',
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
      1342 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uB8ZEsQVT2FxeR7w',
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
      1375 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nyd5kqJzUxf8Vh9l',
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
      1404 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::myZXbUG0BOw3PzJ1',
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
            '_route' => 'generated::pnfcgdZfoymmP2D4',
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
            '_route' => 'generated::tGL7Yd2yXc7T2WH0',
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
      1437 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::a1MPIj1j1GeT9bvC',
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
            '_route' => 'generated::dt3bxzsEHBfsZIit',
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
            '_route' => 'generated::OLyR26Ng8FYKJ4Pe',
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
      1470 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V6wCEFykcipGb9gI',
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
      1493 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6rXfncZkR7cHTrC5',
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
      1524 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mAOxjk6O4chEKwgb',
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
      1566 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PKvIweSuXy8HCCoo',
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
      1589 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bRJupI4VJA16eYyV',
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
      1624 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ccyCsiMka9QcZjiq',
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
      1654 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Mi7i76kQIJN4UhUu',
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
      1690 => 
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
    'generated::DE71Av8AHnclPXkS' => 
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
        'as' => 'generated::DE71Av8AHnclPXkS',
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
    'generated::cIklaGwAOxR1ygOt' => 
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
        'as' => 'generated::cIklaGwAOxR1ygOt',
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
    'generated::xbKRYE7fZgEeOHkL' => 
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
        'as' => 'generated::xbKRYE7fZgEeOHkL',
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
    'generated::mlZlgMerrfOd3i4r' => 
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
        'as' => 'generated::mlZlgMerrfOd3i4r',
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
    'generated::lAnNQAbjoCUvZEjw' => 
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
        'as' => 'generated::lAnNQAbjoCUvZEjw',
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
    'generated::e5jga0JucEpURIgI' => 
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
        'as' => 'generated::e5jga0JucEpURIgI',
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
    'generated::NRV7BCrmnSHKazfg' => 
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
        'as' => 'generated::NRV7BCrmnSHKazfg',
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
    'generated::Yc4lNGh1wSXzlThc' => 
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
        'as' => 'generated::Yc4lNGh1wSXzlThc',
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
    'generated::EaydGIab0CVzm7WJ' => 
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
        'as' => 'generated::EaydGIab0CVzm7WJ',
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
    'generated::gSiuqCEeLyS9rkUw' => 
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
        'as' => 'generated::gSiuqCEeLyS9rkUw',
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
    'generated::CGOLfbpTSzudXVtv' => 
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
        'as' => 'generated::CGOLfbpTSzudXVtv',
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
    'generated::jlQKNIZGXcZX8hyM' => 
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
        'as' => 'generated::jlQKNIZGXcZX8hyM',
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
    'generated::aBhAYNjW4arUX9Bg' => 
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
        'as' => 'generated::aBhAYNjW4arUX9Bg',
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
    'generated::R00FCmKDdRjw6IvK' => 
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
        'as' => 'generated::R00FCmKDdRjw6IvK',
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
    'generated::7E87GReCqS295T5S' => 
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
        'as' => 'generated::7E87GReCqS295T5S',
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
    'generated::yvYWNuFoiSvfseFL' => 
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
        'as' => 'generated::yvYWNuFoiSvfseFL',
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
    'generated::NFuVMKvyfXIbRDFd' => 
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
        'as' => 'generated::NFuVMKvyfXIbRDFd',
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
    'generated::sayNn3oKt8wQsdkC' => 
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
        'as' => 'generated::sayNn3oKt8wQsdkC',
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
    'generated::7zodLVr0SKevbBR0' => 
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
        'as' => 'generated::7zodLVr0SKevbBR0',
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
    'generated::85uWbiDvfJuzFKhA' => 
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
        'as' => 'generated::85uWbiDvfJuzFKhA',
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
    'generated::ab6PIfpusaQ7N527' => 
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
        'as' => 'generated::ab6PIfpusaQ7N527',
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
    'generated::Q4i7601EmVgJ4ti1' => 
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
        'as' => 'generated::Q4i7601EmVgJ4ti1',
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
    'generated::dzAxZix91bbAmYXG' => 
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
        'as' => 'generated::dzAxZix91bbAmYXG',
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
    'generated::vVF4H8SkdfVYPaaK' => 
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
        'as' => 'generated::vVF4H8SkdfVYPaaK',
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
    'generated::hlebQgbqJjM4AtBP' => 
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
        'as' => 'generated::hlebQgbqJjM4AtBP',
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
    'generated::FdKwlgJ7713mE4GI' => 
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
        'as' => 'generated::FdKwlgJ7713mE4GI',
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
    'generated::wWfiuwHL0Lku0DFY' => 
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
        'as' => 'generated::wWfiuwHL0Lku0DFY',
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
    'generated::muWemImkLQn837bc' => 
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
        'as' => 'generated::muWemImkLQn837bc',
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
    'generated::kUd9xzoZvXOa5eU6' => 
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
        'as' => 'generated::kUd9xzoZvXOa5eU6',
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
    'generated::1pnZK3Xx2AAp4EoI' => 
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
        'as' => 'generated::1pnZK3Xx2AAp4EoI',
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
    'generated::iLKsXoPB1vu7cXqi' => 
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
        'as' => 'generated::iLKsXoPB1vu7cXqi',
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
    'generated::R7YIpl6Yr3gij9Pj' => 
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
        'as' => 'generated::R7YIpl6Yr3gij9Pj',
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
    'generated::A231AOLaorLgu7MG' => 
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
        'as' => 'generated::A231AOLaorLgu7MG',
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
    'generated::T9FBTNPIofTCb9t5' => 
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
        'as' => 'generated::T9FBTNPIofTCb9t5',
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
    'generated::a1MPIj1j1GeT9bvC' => 
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
        'as' => 'generated::a1MPIj1j1GeT9bvC',
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
    'generated::dt3bxzsEHBfsZIit' => 
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
        'as' => 'generated::dt3bxzsEHBfsZIit',
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
    'generated::OLyR26Ng8FYKJ4Pe' => 
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
        'as' => 'generated::OLyR26Ng8FYKJ4Pe',
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
    'generated::qFWKg0vHgxHPBLfV' => 
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
        'as' => 'generated::qFWKg0vHgxHPBLfV',
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
    'generated::GkRWuf4CzrP5bZAx' => 
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
        'as' => 'generated::GkRWuf4CzrP5bZAx',
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
    'generated::krRy1ZJduPHcpL6J' => 
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
        'as' => 'generated::krRy1ZJduPHcpL6J',
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
    'generated::vhMLUWAqyDEUBjt1' => 
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
        'as' => 'generated::vhMLUWAqyDEUBjt1',
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
    'generated::Hnn0IJUMlqiGHttC' => 
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
        'as' => 'generated::Hnn0IJUMlqiGHttC',
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
    'generated::osIIuLYsYAhibXAI' => 
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
        'as' => 'generated::osIIuLYsYAhibXAI',
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
    'generated::6fRQBohBLX2kycOk' => 
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
        'as' => 'generated::6fRQBohBLX2kycOk',
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
    'generated::b1ADtHcqZytyLm7D' => 
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
        'as' => 'generated::b1ADtHcqZytyLm7D',
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
    'generated::AH0FS1PaZpys9ZWb' => 
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
        'as' => 'generated::AH0FS1PaZpys9ZWb',
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
    'generated::V6wCEFykcipGb9gI' => 
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
        'as' => 'generated::V6wCEFykcipGb9gI',
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
    'generated::6rXfncZkR7cHTrC5' => 
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
        'as' => 'generated::6rXfncZkR7cHTrC5',
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
    'generated::5IrNrdjQaKg3ZdZK' => 
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
        'as' => 'generated::5IrNrdjQaKg3ZdZK',
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
    'generated::mAOxjk6O4chEKwgb' => 
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
        'as' => 'generated::mAOxjk6O4chEKwgb',
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
    'generated::PKvIweSuXy8HCCoo' => 
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
        'as' => 'generated::PKvIweSuXy8HCCoo',
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
    'generated::bRJupI4VJA16eYyV' => 
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
        'as' => 'generated::bRJupI4VJA16eYyV',
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
    'generated::ccyCsiMka9QcZjiq' => 
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
        'as' => 'generated::ccyCsiMka9QcZjiq',
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
    'generated::Mi7i76kQIJN4UhUu' => 
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
        'as' => 'generated::Mi7i76kQIJN4UhUu',
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
    'generated::zkUEf9OVWDDJwzIU' => 
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
        'as' => 'generated::zkUEf9OVWDDJwzIU',
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
    'generated::UntcNQNJEUrzQO2y' => 
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
        'as' => 'generated::UntcNQNJEUrzQO2y',
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
    'generated::oEyjj0rkZosvCf4g' => 
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
        'as' => 'generated::oEyjj0rkZosvCf4g',
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
    'generated::CZCwnBGrY4GDGlsi' => 
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
        'as' => 'generated::CZCwnBGrY4GDGlsi',
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
    'generated::Yz2L6U2gq5vR5jYl' => 
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
        'as' => 'generated::Yz2L6U2gq5vR5jYl',
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
    'generated::M72TcvjVR9gSYMsD' => 
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
        'as' => 'generated::M72TcvjVR9gSYMsD',
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
    'generated::NFgitMrxrMYQLtRt' => 
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
        'as' => 'generated::NFgitMrxrMYQLtRt',
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
    'generated::NOyoJJLFk7fJwwAC' => 
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
        'as' => 'generated::NOyoJJLFk7fJwwAC',
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
    'generated::9M2RLnp03gY2BnIH' => 
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
        'as' => 'generated::9M2RLnp03gY2BnIH',
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
    'generated::73ZqvQd66OozJTBL' => 
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
        'as' => 'generated::73ZqvQd66OozJTBL',
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
    'generated::T9G1ZyTP4jCO3djV' => 
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
        'as' => 'generated::T9G1ZyTP4jCO3djV',
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
    'generated::wuEmZx7KvL3X4iq0' => 
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
        'as' => 'generated::wuEmZx7KvL3X4iq0',
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
    'generated::xZ11Dyq70t302IjQ' => 
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
        'as' => 'generated::xZ11Dyq70t302IjQ',
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
    'generated::UXitQBk0GHvRNESA' => 
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
        'as' => 'generated::UXitQBk0GHvRNESA',
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
    'generated::t1THjdOZTEu0gmE6' => 
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
        'as' => 'generated::t1THjdOZTEu0gmE6',
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
    'generated::lipYbiyp4OACrfjh' => 
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
        'as' => 'generated::lipYbiyp4OACrfjh',
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
    'generated::IG6ExvVMkaQREE7t' => 
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
        'as' => 'generated::IG6ExvVMkaQREE7t',
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
    'generated::13cYvFMJU3CmBv5j' => 
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
        'as' => 'generated::13cYvFMJU3CmBv5j',
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
    'generated::tyZQisFXTxawHq6G' => 
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
        'as' => 'generated::tyZQisFXTxawHq6G',
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
    'generated::8OotvABBSqxfbGGA' => 
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
        'as' => 'generated::8OotvABBSqxfbGGA',
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
    'generated::UJa5ceqOEQYIBdeA' => 
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
        'as' => 'generated::UJa5ceqOEQYIBdeA',
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
    'generated::9f29zdVVIQilas07' => 
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
        'as' => 'generated::9f29zdVVIQilas07',
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
    'generated::SMxWsuLyUeoE9K4i' => 
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
        'as' => 'generated::SMxWsuLyUeoE9K4i',
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
    'generated::760v5x4JFMebt7Pb' => 
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
        'as' => 'generated::760v5x4JFMebt7Pb',
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
    'generated::1BvoqcLX2DEUBFNl' => 
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
        'as' => 'generated::1BvoqcLX2DEUBFNl',
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
    'generated::uZKlkBRfV19jARn9' => 
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
        'as' => 'generated::uZKlkBRfV19jARn9',
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
    'generated::EwrhZcSvV2AyeGqG' => 
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
        'as' => 'generated::EwrhZcSvV2AyeGqG',
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
    'generated::3UNoHvP6YcXjLs0u' => 
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
        'as' => 'generated::3UNoHvP6YcXjLs0u',
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
    'generated::x0c3jjStinWJ5Co4' => 
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
        'as' => 'generated::x0c3jjStinWJ5Co4',
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
    'generated::ZC21Tx0zH0kDzAEb' => 
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
        'as' => 'generated::ZC21Tx0zH0kDzAEb',
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
    'generated::TlNcKDXrapZEd43K' => 
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
        'as' => 'generated::TlNcKDXrapZEd43K',
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
    'generated::XGwt0IHb2c034ji3' => 
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
        'as' => 'generated::XGwt0IHb2c034ji3',
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
    'generated::ukbIAajKTaCf1JL0' => 
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
        'as' => 'generated::ukbIAajKTaCf1JL0',
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
    'generated::P670vDfwTiPGa8FW' => 
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
        'as' => 'generated::P670vDfwTiPGa8FW',
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
    'generated::2H0MGWQGBbHxiBv1' => 
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
        'as' => 'generated::2H0MGWQGBbHxiBv1',
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
    'generated::i54fn8EjOOU8hPck' => 
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
        'as' => 'generated::i54fn8EjOOU8hPck',
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
    'generated::zu65BTUxvKexZSlq' => 
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
        'as' => 'generated::zu65BTUxvKexZSlq',
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
    'generated::hWGgn4suNlvsazJP' => 
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
        'as' => 'generated::hWGgn4suNlvsazJP',
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
    'generated::yAIjzhwKx7H9YcMu' => 
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
        'as' => 'generated::yAIjzhwKx7H9YcMu',
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
    'generated::a5YrUStZA9fDC97y' => 
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
        'as' => 'generated::a5YrUStZA9fDC97y',
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
    'generated::F3axU7Ztbxjt9yME' => 
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
        'as' => 'generated::F3axU7Ztbxjt9yME',
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
    'generated::Qbpd4UA0ePiL4yrS' => 
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
        'as' => 'generated::Qbpd4UA0ePiL4yrS',
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
    'generated::f82wMi6HN6VSAQtf' => 
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
        'as' => 'generated::f82wMi6HN6VSAQtf',
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
    'generated::PyGYvQYPKbPc6Osm' => 
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
        'as' => 'generated::PyGYvQYPKbPc6Osm',
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
    'generated::n1SWxBfujFRisdx0' => 
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
        'as' => 'generated::n1SWxBfujFRisdx0',
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
    'generated::yoEsWIMw4LNHmpzB' => 
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
        'as' => 'generated::yoEsWIMw4LNHmpzB',
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
    'generated::Jt6E563BoQBjihlh' => 
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
        'as' => 'generated::Jt6E563BoQBjihlh',
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
    'generated::WOAh1O5NFrQFf0q7' => 
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
        'as' => 'generated::WOAh1O5NFrQFf0q7',
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
    'generated::ZU8pdXjUNlZF9YVF' => 
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
        'as' => 'generated::ZU8pdXjUNlZF9YVF',
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
    'generated::ylctj8lHK5hiAiNM' => 
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
        'as' => 'generated::ylctj8lHK5hiAiNM',
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
    'generated::H1PhekTnihGVddsz' => 
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
        'as' => 'generated::H1PhekTnihGVddsz',
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
    'generated::o7Ba9KEkIv2qpsZB' => 
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
        'as' => 'generated::o7Ba9KEkIv2qpsZB',
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
    'generated::YiGEV2ts9chgiIo7' => 
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
        'as' => 'generated::YiGEV2ts9chgiIo7',
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
    'generated::di1VFUHzUSuTz5U4' => 
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
        'as' => 'generated::di1VFUHzUSuTz5U4',
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
    'generated::qygJ4sNOb5AbSmfW' => 
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
        'as' => 'generated::qygJ4sNOb5AbSmfW',
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
    'generated::WEMLbxbxg7mitEs1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/pharmacy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@store',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::WEMLbxbxg7mitEs1',
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
    'generated::eYdOFLGRS4T1c4zS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/pharmacy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@getAllPharmacies',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@getAllPharmacies',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::eYdOFLGRS4T1c4zS',
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
    'generated::M1smZ7Nuvdcv3ylj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/patient/pharmacy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@getPharmacy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@getPharmacy',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::M1smZ7Nuvdcv3ylj',
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
    'generated::bJOghEjmFtUfyykN' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/patient/pharmacy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@deletePharmacy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@deletePharmacy',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::bJOghEjmFtUfyykN',
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
    'generated::u7FDK6K0AgLmlZno' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/patient/pharmacy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPatient',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@editPharmacy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@editPharmacy',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::u7FDK6K0AgLmlZno',
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
    'generated::M7LCH0XtpGh05RUm' => 
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
        'as' => 'generated::M7LCH0XtpGh05RUm',
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
    'generated::2MDQM5Qa5KqggDV7' => 
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
        'as' => 'generated::2MDQM5Qa5KqggDV7',
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
    'generated::QOuZ2QTSXNgUsb36' => 
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
        'as' => 'generated::QOuZ2QTSXNgUsb36',
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
    'generated::L8dMEZkeohj4D8nA' => 
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
        'as' => 'generated::L8dMEZkeohj4D8nA',
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
    'generated::klXqvzPd4J74XfB2' => 
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
        'as' => 'generated::klXqvzPd4J74XfB2',
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
    'generated::xc3sdiarWrJ4mj06' => 
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
        'as' => 'generated::xc3sdiarWrJ4mj06',
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
    'generated::sO7YPwnF7928EMMq' => 
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
        'as' => 'generated::sO7YPwnF7928EMMq',
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
    'generated::QjMsKH7jWL9EySTx' => 
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
        'as' => 'generated::QjMsKH7jWL9EySTx',
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
    'generated::vJ9aWkjHlNtNVLwQ' => 
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
        'as' => 'generated::vJ9aWkjHlNtNVLwQ',
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
    'generated::SML9pz5MguzsV5IG' => 
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
        'as' => 'generated::SML9pz5MguzsV5IG',
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
    'generated::2wPApLBFU2qlNegp' => 
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
        'as' => 'generated::2wPApLBFU2qlNegp',
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
    'generated::3MLS4TZo39fbw5qm' => 
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
        'as' => 'generated::3MLS4TZo39fbw5qm',
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
    'generated::tEAvoUuW1ZRuvUqn' => 
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
        'as' => 'generated::tEAvoUuW1ZRuvUqn',
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
    'generated::KvC01u89O2xOdQrt' => 
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
        'as' => 'generated::KvC01u89O2xOdQrt',
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
    'generated::icUHjdYFJItWTO12' => 
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
        'as' => 'generated::icUHjdYFJItWTO12',
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
    'generated::RyXe9RJC4Vwv1N5T' => 
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
        'as' => 'generated::RyXe9RJC4Vwv1N5T',
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
    'generated::ta1rklWe6OKqyaaP' => 
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
        'as' => 'generated::ta1rklWe6OKqyaaP',
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
    'generated::949Rdpl6tbgnlWLn' => 
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
        'as' => 'generated::949Rdpl6tbgnlWLn',
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
    'generated::zLhiSDDu7ZrrIXBj' => 
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
        'as' => 'generated::zLhiSDDu7ZrrIXBj',
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
    'generated::7LSgFIHFmE6bufO5' => 
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
        'as' => 'generated::7LSgFIHFmE6bufO5',
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
    'generated::f82Xa4Fe6D4i3qQV' => 
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
        'as' => 'generated::f82Xa4Fe6D4i3qQV',
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
    'generated::YPGpSeUgaEfA46lE' => 
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
        'as' => 'generated::YPGpSeUgaEfA46lE',
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
    'generated::RaIk7jhLqDqV29DG' => 
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
        'as' => 'generated::RaIk7jhLqDqV29DG',
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
    'generated::Qfyeiq5KbHlpG91X' => 
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
        'as' => 'generated::Qfyeiq5KbHlpG91X',
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
    'generated::9guK3iQhoLpN6Ebx' => 
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
        'as' => 'generated::9guK3iQhoLpN6Ebx',
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
    'generated::MzYEaoxDbMZsvhoL' => 
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
        'as' => 'generated::MzYEaoxDbMZsvhoL',
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
    'generated::aOArqcMgovLDwfOq' => 
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
        'as' => 'generated::aOArqcMgovLDwfOq',
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
    'generated::QcXemgL8MugGRcTY' => 
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
        'as' => 'generated::QcXemgL8MugGRcTY',
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
    'generated::JvQuA7RSOZ6bMHAz' => 
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
        'as' => 'generated::JvQuA7RSOZ6bMHAz',
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
    'generated::iFcrn9nqohQiGnI7' => 
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
        'as' => 'generated::iFcrn9nqohQiGnI7',
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
    'generated::ql6oEPdbFQMUHyZg' => 
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
        'as' => 'generated::ql6oEPdbFQMUHyZg',
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
    'generated::s19tMlQ6lwzDQ3Rs' => 
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
        'as' => 'generated::s19tMlQ6lwzDQ3Rs',
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
    'generated::x2fqTNcCYlWmf4UF' => 
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
        'as' => 'generated::x2fqTNcCYlWmf4UF',
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
    'generated::CeacTLLdPpVJUqMT' => 
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
        'as' => 'generated::CeacTLLdPpVJUqMT',
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
    'generated::sD99JNiUw0rOewzr' => 
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
        'as' => 'generated::sD99JNiUw0rOewzr',
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
    'generated::T1bH0ii0Si2Gr41S' => 
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
        'as' => 'generated::T1bH0ii0Si2Gr41S',
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
    'generated::ZbmROg0mgYML45Ys' => 
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
        'as' => 'generated::ZbmROg0mgYML45Ys',
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
    'generated::24ECOpw4tI5uPwA0' => 
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
        'as' => 'generated::24ECOpw4tI5uPwA0',
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
    'generated::yo9oITuXFKFV0WHe' => 
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
        'as' => 'generated::yo9oITuXFKFV0WHe',
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
    'generated::NhnXk0dXB7X3Kz7Y' => 
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
        'as' => 'generated::NhnXk0dXB7X3Kz7Y',
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
    'generated::1BsSrBDnC9y5bfmB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/pharmacy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@store',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::1BsSrBDnC9y5bfmB',
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
    'generated::Y7CaEjpvB5qwogmT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/pharmacy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@getAllPharmacies',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@getAllPharmacies',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::Y7CaEjpvB5qwogmT',
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
    'generated::SNeFuB3WJX2utxpW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/pharmacy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@getPharmacy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@getPharmacy',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::SNeFuB3WJX2utxpW',
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
    'generated::aY6UgpfDDrLZquIB' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/prescriber/pharmacy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@deletePharmacy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@deletePharmacy',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::aY6UgpfDDrLZquIB',
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
    'generated::ubGyuH30GbZYRpOD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/pharmacy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@editPharmacy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PharmacyController@editPharmacy',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::ubGyuH30GbZYRpOD',
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
    'generated::1i3Ix7771zDUU99Q' => 
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
        'as' => 'generated::1i3Ix7771zDUU99Q',
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
    'generated::s64IxNDMSHVOxzoY' => 
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
        'as' => 'generated::s64IxNDMSHVOxzoY',
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
    'generated::ycW89kCSLDJcvoQS' => 
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
        'as' => 'generated::ycW89kCSLDJcvoQS',
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
    'generated::0muiFX7NfwbXOLTI' => 
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
        'as' => 'generated::0muiFX7NfwbXOLTI',
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
    'generated::vszJRwXLTinZrsQt' => 
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
        'as' => 'generated::vszJRwXLTinZrsQt',
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
    'generated::rHW00klh7oDznMp8' => 
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
        'as' => 'generated::rHW00klh7oDznMp8',
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
    'generated::icmgo2sWQbaVuPCm' => 
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
        'as' => 'generated::icmgo2sWQbaVuPCm',
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
    'generated::Enu6FbnnbLZT6iAy' => 
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
        'as' => 'generated::Enu6FbnnbLZT6iAy',
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
    'generated::LNXjmXSZyUblHAVs' => 
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
        'as' => 'generated::LNXjmXSZyUblHAVs',
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
    'generated::9OQJYsRTKNklbKrv' => 
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
        'as' => 'generated::9OQJYsRTKNklbKrv',
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
    'generated::lbC50xBpVBngAnXS' => 
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
        'as' => 'generated::lbC50xBpVBngAnXS',
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
    'generated::wCZcpGZ98WA7RZdW' => 
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
        'as' => 'generated::wCZcpGZ98WA7RZdW',
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
    'generated::wkuADxbLoxbHfJvo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/informed-symptoms/period',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:webPresc',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptomsPrescPeriod',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptomsPrescPeriod',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::wkuADxbLoxbHfJvo',
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
    'generated::XvgaLjOL5ciAPVOx' => 
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
        'as' => 'generated::XvgaLjOL5ciAPVOx',
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
    'generated::dspH08BrB6esKPvL' => 
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
        'as' => 'generated::dspH08BrB6esKPvL',
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
    'generated::LK9G6BPRAofRviGP' => 
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
        'as' => 'generated::LK9G6BPRAofRviGP',
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
    'generated::Yyg7IKkXUPkeJ1ky' => 
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
        'as' => 'generated::Yyg7IKkXUPkeJ1ky',
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
    'generated::aS5iRMQO3mSTSIiy' => 
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
        'as' => 'generated::aS5iRMQO3mSTSIiy',
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
    'generated::hPEqZpAjqLurSC2j' => 
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
        'as' => 'generated::hPEqZpAjqLurSC2j',
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
    'generated::inFdznIDS9edTK3Y' => 
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
        'as' => 'generated::inFdznIDS9edTK3Y',
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
    'generated::uB8ZEsQVT2FxeR7w' => 
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
        'as' => 'generated::uB8ZEsQVT2FxeR7w',
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
    'generated::oZ2PWMaaRJmKRGBF' => 
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
        'as' => 'generated::oZ2PWMaaRJmKRGBF',
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
    'generated::RyaOQ4EoTPEY1jvS' => 
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
        'as' => 'generated::RyaOQ4EoTPEY1jvS',
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
    'generated::hpjSIssCxPJ9chEJ' => 
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
        'as' => 'generated::hpjSIssCxPJ9chEJ',
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
    'generated::SUf5wHRAIr0NtNvd' => 
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
        'as' => 'generated::SUf5wHRAIr0NtNvd',
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
    'generated::mPATwEnpyWkuJXN8' => 
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
        'as' => 'generated::mPATwEnpyWkuJXN8',
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
    'generated::liU2JOvlqSHrLntB' => 
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
        'as' => 'generated::liU2JOvlqSHrLntB',
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
    'generated::myZXbUG0BOw3PzJ1' => 
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
        'as' => 'generated::myZXbUG0BOw3PzJ1',
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
    'generated::lSX3ijk11SOuIltJ' => 
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
        'as' => 'generated::lSX3ijk11SOuIltJ',
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
    'generated::pnfcgdZfoymmP2D4' => 
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
        'as' => 'generated::pnfcgdZfoymmP2D4',
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
    'generated::tGL7Yd2yXc7T2WH0' => 
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
        'as' => 'generated::tGL7Yd2yXc7T2WH0',
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
    'generated::gvcELnDAR09ZHRQS' => 
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
        'as' => 'generated::gvcELnDAR09ZHRQS',
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
    'generated::dRz3jI3LAd2LVy3a' => 
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
        'as' => 'generated::dRz3jI3LAd2LVy3a',
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
    'generated::B80ez6qSRoRa89HL' => 
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
        'as' => 'generated::B80ez6qSRoRa89HL',
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
    'generated::XNiyjy6NpmzG3mqL' => 
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
        'as' => 'generated::XNiyjy6NpmzG3mqL',
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
    'generated::ctZh0n6Y8FzfyLp2' => 
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
        'as' => 'generated::ctZh0n6Y8FzfyLp2',
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
    'generated::Po8BcRvumN5kxCXs' => 
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
        'as' => 'generated::Po8BcRvumN5kxCXs',
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
    'generated::9orZLFcMbTcBHvZB' => 
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
        'as' => 'generated::9orZLFcMbTcBHvZB',
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
    'generated::Ke6H5vuSoh9Nebgb' => 
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
        'as' => 'generated::Ke6H5vuSoh9Nebgb',
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
    'generated::nyd5kqJzUxf8Vh9l' => 
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
        'as' => 'generated::nyd5kqJzUxf8Vh9l',
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
    'generated::GgzdPQ4lXmTFOsHk' => 
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
        'as' => 'generated::GgzdPQ4lXmTFOsHk',
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
    'generated::hHFvBoYwTs05Htw1' => 
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
        'as' => 'generated::hHFvBoYwTs05Htw1',
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
    'generated::aRIMjFCtRFt7a569' => 
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
        'as' => 'generated::aRIMjFCtRFt7a569',
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
    'generated::DySB9GTwQP8S6r2Y' => 
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
        'as' => 'generated::DySB9GTwQP8S6r2Y',
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
    'generated::pWwGQ7bJUmhSQ4Sz' => 
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
        'as' => 'generated::pWwGQ7bJUmhSQ4Sz',
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
    'generated::hGWnykodsf8Fx8hT' => 
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
        'as' => 'generated::hGWnykodsf8Fx8hT',
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
    'generated::v4iPCCopvQHrgr5W' => 
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
        'as' => 'generated::v4iPCCopvQHrgr5W',
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
    'generated::DF6dJ5PJnFA5aOdU' => 
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
        'as' => 'generated::DF6dJ5PJnFA5aOdU',
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
    'generated::7xGmEkitgIAvehel' => 
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
        'as' => 'generated::7xGmEkitgIAvehel',
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
    'generated::ZSPwvCmBv4xdNmWy' => 
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
        'as' => 'generated::ZSPwvCmBv4xdNmWy',
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
    'generated::52wu9b4upPSNoUI3' => 
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
        'as' => 'generated::52wu9b4upPSNoUI3',
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
    'generated::PEmBRUOuOaIOQy61' => 
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
        'as' => 'generated::PEmBRUOuOaIOQy61',
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
    'generated::k7GAnXzx3RoUHhnn' => 
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
        'as' => 'generated::k7GAnXzx3RoUHhnn',
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
    'generated::5ps7S5mXRxmerzzR' => 
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
        'as' => 'generated::5ps7S5mXRxmerzzR',
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
    'generated::1HBO5R1FJ21cjDtz' => 
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
        'as' => 'generated::1HBO5R1FJ21cjDtz',
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
    'generated::IldsQ8eW7cHh1Qrd' => 
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
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000004d80000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IldsQ8eW7cHh1Qrd',
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
    'generated::mDJON6RqfroQ27iF' => 
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
        'as' => 'generated::mDJON6RqfroQ27iF',
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
    'generated::DEO9H1e0cJHHwBga' => 
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
        'as' => 'generated::DEO9H1e0cJHHwBga',
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
    'generated::56C0FkRl5rJAbcaP' => 
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
        'as' => 'generated::56C0FkRl5rJAbcaP',
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
