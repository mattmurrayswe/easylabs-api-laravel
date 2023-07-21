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
            '_route' => 'generated::UBmEvLzndcoCYhjc',
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
            '_route' => 'generated::QzQIpijcU18RbMLR',
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
      '/api/cep' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jRFvWTiL8pSldS7C',
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
            '_route' => 'generated::vD3KiGPHYrb4dwkY',
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
            '_route' => 'generated::v1Y7faGGZIUptLEq',
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
            '_route' => 'generated::Hgn7doSEijkWiaxc',
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
            '_route' => 'generated::ZQVwmshQ01QSFaUW',
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
            '_route' => 'generated::VvrHJEpyx3DGHboV',
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
            '_route' => 'generated::YCROtns1j0aPzdWS',
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
            '_route' => 'generated::pvjFMZB29ZXeznba',
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
            '_route' => 'generated::sIPBxmkChfTwkCkt',
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
            '_route' => 'generated::o6g9ytFqPDg6AsEj',
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
      '/api/documents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jynnfZanIDmKRJVu',
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
            '_route' => 'generated::eHyqxubCczl9t7v2',
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
            '_route' => 'generated::vJovoKIwPvW2TKh3',
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
            '_route' => 'generated::tl4ZXGM3uxucii36',
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
            '_route' => 'generated::YhinazALG9hcQpEp',
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
            '_route' => 'generated::XHeNaaSgLI1owIc2',
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
            '_route' => 'generated::0Ke24FMUIPXZFsJx',
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
            '_route' => 'generated::CDc9lwlUScVUeIZQ',
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
            '_route' => 'generated::GaFVoby6BahbPtRU',
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
      '/api/patient/set-treatment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5n161iPZHLVw2MLv',
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
            '_route' => 'generated::z0jey7FPMjCIP5OP',
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
      '/api/patient/password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b7Ak8zMxic9MmQ5J',
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
      '/api/patient/inform-med' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ncDoKXgnGmIgVHPd',
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
            '_route' => 'generated::6c5xeHMCoY7VDY7Y',
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
            '_route' => 'generated::XSETbPJfx0RM7Xv6',
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
            '_route' => 'generated::qMM9zcbPTgpKvEYu',
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
            '_route' => 'generated::N8tZ8iSFTtIcijMM',
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
            '_route' => 'generated::5gD4EHWoB3fSYsan',
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
            '_route' => 'generated::35kBbDtBYhLgm40Y',
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
            '_route' => 'generated::9t7rqbCsNcP8VgJV',
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
            '_route' => 'generated::e0rHk0a4u5zINffQ',
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
            '_route' => 'generated::XZzuKL2k5nSpP1oq',
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
            '_route' => 'generated::CNUj5lT3yG1qt3ah',
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
      '/api/patient/medicine' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BP5VzH8z8Iwa5kaD',
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
            '_route' => 'generated::VaNfINum0fLo7s5Y',
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
            '_route' => 'generated::9qCREpYkiM0Wh4cx',
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
            '_route' => 'generated::f9FJfQerSa1cED61',
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
            '_route' => 'generated::w8KJwJxea3x7e8og',
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
            '_route' => 'generated::JNEmq2h9wx8RcaWT',
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
            '_route' => 'generated::2g8c9UXLqlffB423',
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
            '_route' => 'generated::ntgu3toJFKuLggiY',
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
            '_route' => 'generated::Z9yDxKYOs0XM8uxC',
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
            '_route' => 'generated::xzVDeQNlGYo1EDeU',
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
            '_route' => 'generated::LZ8TRS974OW2n3OY',
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
            '_route' => 'generated::4QRcEQ68rqkCiXkW',
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
            '_route' => 'generated::0YM667xNmqBe4OLP',
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
      '/api/prescriber/documents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9mSPF08P7ZCqDjqs',
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
            '_route' => 'generated::mIJ66UHxAu7FbPVa',
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
      '/api/prescriber/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z7vBevSay7FR22QR',
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
            '_route' => 'generated::Z6C6vjbKXjWaYZ47',
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
            '_route' => 'generated::TBVsTpzetm7MzfmI',
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
            '_route' => 'generated::8QCFf65YIdfa74ix',
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
            '_route' => 'generated::uwBvv2IWbKvC6SZi',
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
            '_route' => 'generated::UlKTRsBVsg4LfzuU',
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
            '_route' => 'generated::Uj24XtcY8Ji9baqt',
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
            '_route' => 'generated::IwaTZy7c3ZoIAMlD',
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
      '/api/prescriber/connect-patient' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::44w7WqTf2jzU5E0X',
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
      '/api/prescriber/get-availability' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NUlSa5vD7PxeKtYw',
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
            '_route' => 'generated::6BTeAXlw6891XcwK',
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
            '_route' => 'generated::4tPWLALO9j3trSTq',
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
            '_route' => 'generated::viEVtF7YotqnupNr',
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
            '_route' => 'generated::Mf2ya198nJxFDxVi',
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
      '/api/prescriber/get-clinic-adress' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7l30arz8pMVTHRwv',
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
      '/api/prescriber/create-clinic-adress' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xVT65L0RDiuxrdlw',
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
      '/api/prescriber/update-clinic-adress' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TO01CWWmavDK3Xic',
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
            '_route' => 'generated::lSLmVOxWyCNeRAIr',
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
            '_route' => 'generated::06YhdLDjE61jjJM2',
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
            '_route' => 'generated::bWrqBZwz8ouJHnY0',
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
            '_route' => 'generated::RlI7D50UgzqCVnqL',
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
            '_route' => 'generated::IRSljer8Cmk2gYXk',
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
            '_route' => 'generated::fXcBexVuhXcUfbwv',
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
            '_route' => 'generated::V5LNaV1ZatgRhP7M',
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
            '_route' => 'generated::u6KHJK15BNhyR7p3',
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
            '_route' => 'generated::xQgfGnxvnyYUVkS2',
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
            '_route' => 'generated::EiZLHtwnOBho997v',
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
            '_route' => 'generated::zP3xf5EVyMXi5OJe',
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
            '_route' => 'generated::lwLw77qF0aiQASel',
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
            '_route' => 'generated::LA3Rcl6Ywzqq3fVb',
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
            '_route' => 'generated::tEyH8fxoRwQigxi4',
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
            '_route' => 'generated::1XIYWWtqhouvSL38',
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
            '_route' => 'generated::jYjFg3ZsWZIZryh4',
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
            '_route' => 'generated::OBTnESznFoDrMwwF',
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
            '_route' => 'generated::TkXDQuE0fynmF2nq',
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
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iLsi4F3WDL8z35Vr',
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
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ipx4zFGw0r0L1Fvp',
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
    ),
    2 => 
    array (
      0 => '{^(?|/manual/(?|s(?|earch\\-index/([^/]++)(*:43)|tyles/([^/]++)(*:64)|cripts/([^/]++)(*:86))|([^/]++)(?:/((?:.*)))?(*:116))|/vapor\\-ui(?|/api/(?|logs/([^/]++)(?|(*:162)|/([^/]++)(*:179))|jobs/(?|([^/]++)(?|(*:207)|/([^/]++)(*:224))|failed/(?|retry/([^/]++)(*:257)|forget/([^/]++)(*:280))))|(?:/((?:.*)))?(*:305))|/api/(?|s(?|ymptom/([^/]++)(?|(*:344))|elfie\\-com\\-doc/([^/]++)(*:377))|medicine/([^/]++)(?|(*:406))|diagnose/([^/]++)(?|(*:435))|p(?|harmacy/([^/]++)(?|(*:467))|atient/(?|get\\-treatments/([^/]++)(*:510)|patient\\-info/([^/]++)(?|(*:543))|d(?|e(?|sativate\\-account/([^/]++)(*:586)|lete\\-account/([^/]++)(*:616))|iagnose/([^/]++)(?|(*:644)))|account\\-config/([^/]++)(*:678)|medicine/([^/]++)(?|(*:706))|treatment/([^/]++)(?|(*:736))|new\\-treatment/([^/]++)(?|(*:771)))|rescriber/(?|p(?|rescriber\\-info/([^/]++)(?|(*:825))|ercepcao\\-melhora/([^/]++)(*:860))|d(?|e(?|sativate\\-account/([^/]++)(*:903)|lete\\-account/([^/]++)(*:933))|iagnose/([^/]++)(?|(*:961))|rop\\-appointment/([^/]++)(*:995))|treatment/([^/]++)(?|(*:1025))|new\\-treatment/([^/]++)(?|(*:1061))|e(?|rase\\-connected\\-patient/([^/]++)(*:1108)|nd\\-appointment/([^/]++)(*:1141))|get\\-p(?|acient\\-treatment/([^/]++)(*:1186)|rescriber\\-patient/([^/]++)(*:1222))|voucher/([^/]++)(?|(*:1251))))|treatment/([^/]++)(?|(*:1284))|crm\\-(?|frente/([^/]++)(*:1317)|verso/([^/]++)(*:1340))|foto\\-perfil/([^/]++)(*:1371)|valide/(?|crm\\-(?|frente/([^/]++)(*:1413)|verso/([^/]++)(*:1436))|selfie\\-com\\-doc/([^/]++)(*:1471)|foto\\-perfil/([^/]++)(*:1501))))/?$}sDu',
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
      162 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YcQEDYRCNWSSiAQf',
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
      179 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BYGWVAEREFp1j2Pm',
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
      207 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pqmfhlqtHh8IG8Sa',
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
      224 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JPDX0sp9gixnXNie',
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
      257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uMQ4XFNRPke97T7B',
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
      280 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CzlzJt213i0q7ZYa',
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
      305 => 
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
      344 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1g5hru3M1Pp01Zm4',
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
            '_route' => 'generated::ppahnwyozR4LxXdJ',
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
      377 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Haz9L2pBj7qOG17V',
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
      406 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::o0iO8E7W9RQKOqdX',
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
            '_route' => 'generated::OnvZt8qZNPxzreRd',
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
            '_route' => 'generated::Ms8Cil3wFjhq80CW',
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
      435 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xqWSjfQwiNvjOG4j',
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
            '_route' => 'generated::4a5G0a0rSAouNlRV',
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
            '_route' => 'generated::sa6lS7mAjNvfIH60',
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
      467 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Vt7c06vCtYwAYAW9',
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
            '_route' => 'generated::zcYl0KLxuAf2HVdi',
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
            '_route' => 'generated::OIW8PUEMrsfW3AIN',
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
      510 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Iff8j3c9SC9JF6b6',
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
      543 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uLVo5GBX5n4oySWh',
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
            '_route' => 'generated::SMXpwnNfM7cqYRun',
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
      586 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P53r1avOIVKcMqrN',
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
      616 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KORoCj2SLuqTXsqh',
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
      644 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QgX7Jhr2RQg58bnQ',
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
            '_route' => 'generated::pOTvospKHYMcwLGO',
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
            '_route' => 'generated::xskqT4TufQvl66Rg',
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
      678 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gcoM1bmtWbZ9uwKo',
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
      706 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6agic8u2QQSCEecD',
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
            '_route' => 'generated::oDkyvefHE8CEJG3m',
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
            '_route' => 'generated::MZ5Uvd6ISWwjbl8m',
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
      736 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uIfKlR4B7wSMUCZl',
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
            '_route' => 'generated::AaQMxxC7E7ZKXjfN',
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
            '_route' => 'generated::1H38XKe9HEzJ7WjO',
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
      771 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q5X5PZ2AGa9MiIZK',
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
            '_route' => 'generated::r9VeaOzdNUBCPY11',
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
            '_route' => 'generated::lqgu2KZmBJooGhlR',
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
      825 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::omyqWHIU7h1GGjgd',
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
            '_route' => 'generated::HnSCVRwOcQRMX4Vr',
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
      860 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kzFvw9ME0dHeRuBQ',
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
      903 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tTDeS44QR2EVu0Hl',
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
      933 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VQ3uKnp3T9lniz3f',
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
      961 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p2xsEHouevs0o6H1',
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
            '_route' => 'generated::BK4OdmUwmUtojO93',
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
            '_route' => 'generated::UbXAjmq6g9js8z9H',
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
      995 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LsNwN8heNIxlozh2',
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
      1025 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7jCjuaikYYj1n6fh',
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
            '_route' => 'generated::Jp9gwKavrniMKTLC',
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
            '_route' => 'generated::ijD3i6MU1Dn4uiyb',
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
      1061 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nyU9LsPvIwmJtMT1',
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
            '_route' => 'generated::gQU8CAUaNtysB5Ex',
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
            '_route' => 'generated::IEECnvhC2rqaF1UV',
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
      1108 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3w1wr5yB89gAoBUN',
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
      1141 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8lKVjemZJMPVNzj2',
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
      1186 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GOWhNGRx2qB6WzfW',
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
      1222 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LTkI59TCeB5ZpADW',
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
      1251 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4dBYDLS5Vbh3hPEB',
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
            '_route' => 'generated::o2suz5OyXN147fRu',
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
            '_route' => 'generated::0Bte6Dy923J34TRX',
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
      1284 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0irlpt7DmkMX5PHz',
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
            '_route' => 'generated::ety6iFgypZvD7R8C',
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
            '_route' => 'generated::7XubCW5fFqXAGdZw',
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
      1317 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::snz4gqSBFh1vUOQq',
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
      1340 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SBcBktnJQwHa9y8j',
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
      1371 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cP3JEpiBYF7lLtD0',
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
      1413 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7GI75iaA4EHj5fEF',
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
      1436 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lRRCfuc8TpurIWWy',
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
      1471 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hPByJEH6AVaQKeZK',
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
      1501 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nEzyqzO2rNPcoAX8',
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
    'generated::UBmEvLzndcoCYhjc' => 
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
        'as' => 'generated::UBmEvLzndcoCYhjc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YcQEDYRCNWSSiAQf' => 
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
        'as' => 'generated::YcQEDYRCNWSSiAQf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BYGWVAEREFp1j2Pm' => 
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
        'as' => 'generated::BYGWVAEREFp1j2Pm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QzQIpijcU18RbMLR' => 
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
        'as' => 'generated::QzQIpijcU18RbMLR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pqmfhlqtHh8IG8Sa' => 
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
        'as' => 'generated::pqmfhlqtHh8IG8Sa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JPDX0sp9gixnXNie' => 
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
        'as' => 'generated::JPDX0sp9gixnXNie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uMQ4XFNRPke97T7B' => 
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
        'as' => 'generated::uMQ4XFNRPke97T7B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CzlzJt213i0q7ZYa' => 
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
        'as' => 'generated::CzlzJt213i0q7ZYa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::jRFvWTiL8pSldS7C' => 
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
        'as' => 'generated::jRFvWTiL8pSldS7C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vD3KiGPHYrb4dwkY' => 
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
        'as' => 'generated::vD3KiGPHYrb4dwkY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1g5hru3M1Pp01Zm4' => 
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
        'as' => 'generated::1g5hru3M1Pp01Zm4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ppahnwyozR4LxXdJ' => 
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
        'as' => 'generated::ppahnwyozR4LxXdJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v1Y7faGGZIUptLEq' => 
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
        'as' => 'generated::v1Y7faGGZIUptLEq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o0iO8E7W9RQKOqdX' => 
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
        'as' => 'generated::o0iO8E7W9RQKOqdX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hgn7doSEijkWiaxc' => 
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
        'as' => 'generated::Hgn7doSEijkWiaxc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OnvZt8qZNPxzreRd' => 
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
        'as' => 'generated::OnvZt8qZNPxzreRd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ms8Cil3wFjhq80CW' => 
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
        'as' => 'generated::Ms8Cil3wFjhq80CW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZQVwmshQ01QSFaUW' => 
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
        'as' => 'generated::ZQVwmshQ01QSFaUW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VvrHJEpyx3DGHboV' => 
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
        'as' => 'generated::VvrHJEpyx3DGHboV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xqWSjfQwiNvjOG4j' => 
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
        'as' => 'generated::xqWSjfQwiNvjOG4j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4a5G0a0rSAouNlRV' => 
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
        'as' => 'generated::4a5G0a0rSAouNlRV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sa6lS7mAjNvfIH60' => 
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
        'as' => 'generated::sa6lS7mAjNvfIH60',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YCROtns1j0aPzdWS' => 
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
        'as' => 'generated::YCROtns1j0aPzdWS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pvjFMZB29ZXeznba' => 
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
        'as' => 'generated::pvjFMZB29ZXeznba',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Vt7c06vCtYwAYAW9' => 
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
        'as' => 'generated::Vt7c06vCtYwAYAW9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zcYl0KLxuAf2HVdi' => 
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
        'as' => 'generated::zcYl0KLxuAf2HVdi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OIW8PUEMrsfW3AIN' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
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
        'as' => 'generated::OIW8PUEMrsfW3AIN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sIPBxmkChfTwkCkt' => 
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
        'as' => 'generated::sIPBxmkChfTwkCkt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o6g9ytFqPDg6AsEj' => 
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
        'as' => 'generated::o6g9ytFqPDg6AsEj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0irlpt7DmkMX5PHz' => 
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
        'as' => 'generated::0irlpt7DmkMX5PHz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ety6iFgypZvD7R8C' => 
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
        'as' => 'generated::ety6iFgypZvD7R8C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7XubCW5fFqXAGdZw' => 
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
        'as' => 'generated::7XubCW5fFqXAGdZw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jynnfZanIDmKRJVu' => 
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
        'as' => 'generated::jynnfZanIDmKRJVu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eHyqxubCczl9t7v2' => 
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
        'as' => 'generated::eHyqxubCczl9t7v2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::snz4gqSBFh1vUOQq' => 
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
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@getCRMFrente',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@getCRMFrente',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::snz4gqSBFh1vUOQq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SBcBktnJQwHa9y8j' => 
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
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@getCRMVerso',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@getCRMVerso',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::SBcBktnJQwHa9y8j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Haz9L2pBj7qOG17V' => 
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
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@getSelfieComDoc',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@getSelfieComDoc',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Haz9L2pBj7qOG17V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cP3JEpiBYF7lLtD0' => 
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
        'as' => 'generated::cP3JEpiBYF7lLtD0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7GI75iaA4EHj5fEF' => 
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
        'as' => 'generated::7GI75iaA4EHj5fEF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lRRCfuc8TpurIWWy' => 
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
        'as' => 'generated::lRRCfuc8TpurIWWy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hPByJEH6AVaQKeZK' => 
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
        'as' => 'generated::hPByJEH6AVaQKeZK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nEzyqzO2rNPcoAX8' => 
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
        'as' => 'generated::nEzyqzO2rNPcoAX8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::vJovoKIwPvW2TKh3' => 
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
        'as' => 'generated::vJovoKIwPvW2TKh3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tl4ZXGM3uxucii36' => 
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
        'as' => 'generated::tl4ZXGM3uxucii36',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YhinazALG9hcQpEp' => 
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
        'as' => 'generated::YhinazALG9hcQpEp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XHeNaaSgLI1owIc2' => 
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
        'as' => 'generated::XHeNaaSgLI1owIc2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0Ke24FMUIPXZFsJx' => 
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
        'as' => 'generated::0Ke24FMUIPXZFsJx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CDc9lwlUScVUeIZQ' => 
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
        'as' => 'generated::CDc9lwlUScVUeIZQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GaFVoby6BahbPtRU' => 
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
        'as' => 'generated::GaFVoby6BahbPtRU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5n161iPZHLVw2MLv' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@setTreatmentToPatient',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@setTreatmentToPatient',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::5n161iPZHLVw2MLv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Iff8j3c9SC9JF6b6' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@getPatientTreatments',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@getPatientTreatments',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::Iff8j3c9SC9JF6b6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z0jey7FPMjCIP5OP' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@logout',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::z0jey7FPMjCIP5OP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uLVo5GBX5n4oySWh' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@patientInfo',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@patientInfo',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::uLVo5GBX5n4oySWh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SMXpwnNfM7cqYRun' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@editPatientInfo',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@editPatientInfo',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::SMXpwnNfM7cqYRun',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b7Ak8zMxic9MmQ5J' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@editPassword',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@editPassword',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::b7Ak8zMxic9MmQ5J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::P53r1avOIVKcMqrN' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@desativate',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@desativate',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::P53r1avOIVKcMqrN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KORoCj2SLuqTXsqh' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@delete',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@delete',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::KORoCj2SLuqTXsqh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gcoM1bmtWbZ9uwKo' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@updateAccountConfig',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@updateAccountConfig',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::gcoM1bmtWbZ9uwKo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ncDoKXgnGmIgVHPd' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PatientUsesMedicineController@informMed',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PatientUsesMedicineController@informMed',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::ncDoKXgnGmIgVHPd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6c5xeHMCoY7VDY7Y' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PatientUsesMedicineController@listInformedMed',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PatientUsesMedicineController@listInformedMed',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::6c5xeHMCoY7VDY7Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XSETbPJfx0RM7Xv6' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informSymptoms',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informSymptoms',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::XSETbPJfx0RM7Xv6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qMM9zcbPTgpKvEYu' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptomEdit',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptomEdit',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::qMM9zcbPTgpKvEYu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N8tZ8iSFTtIcijMM' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptomDelete',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptomDelete',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::N8tZ8iSFTtIcijMM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5gD4EHWoB3fSYsan' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptoms',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptoms',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::5gD4EHWoB3fSYsan',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::35kBbDtBYhLgm40Y' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptomsCount',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@informedSymptomsCount',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::35kBbDtBYhLgm40Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9t7rqbCsNcP8VgJV' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\PatientInformTreatmentController@informTreatment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\PatientInformTreatmentController@informTreatment',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::9t7rqbCsNcP8VgJV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e0rHk0a4u5zINffQ' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@store',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::e0rHk0a4u5zINffQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XZzuKL2k5nSpP1oq' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@messageToPrescriber',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@messageToPrescriber',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::XZzuKL2k5nSpP1oq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CNUj5lT3yG1qt3ah' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@readMessagesToPrescriber',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\FollowUpController@readMessagesToPrescriber',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::CNUj5lT3yG1qt3ah',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BP5VzH8z8Iwa5kaD' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@store',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::BP5VzH8z8Iwa5kaD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6agic8u2QQSCEecD' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@getMedicine',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@getMedicine',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::6agic8u2QQSCEecD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VaNfINum0fLo7s5Y' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@getAllMedicine',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@getAllMedicine',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::VaNfINum0fLo7s5Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oDkyvefHE8CEJG3m' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@deleteMedicine',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@deleteMedicine',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::oDkyvefHE8CEJG3m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MZ5Uvd6ISWwjbl8m' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@edit',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\MedicineController@edit',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::MZ5Uvd6ISWwjbl8m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9qCREpYkiM0Wh4cx' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@store',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::9qCREpYkiM0Wh4cx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f9FJfQerSa1cED61' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@getAllTreatments',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@getAllTreatments',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::f9FJfQerSa1cED61',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uIfKlR4B7wSMUCZl' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@getTreatment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@getTreatment',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::uIfKlR4B7wSMUCZl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AaQMxxC7E7ZKXjfN' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@deleteTreatment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@deleteTreatment',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::AaQMxxC7E7ZKXjfN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1H38XKe9HEzJ7WjO' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@editTreatment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@editTreatment',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::1H38XKe9HEzJ7WjO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w8KJwJxea3x7e8og' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@store',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::w8KJwJxea3x7e8og',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JNEmq2h9wx8RcaWT' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@getAllDiagnoses',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@getAllDiagnoses',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::JNEmq2h9wx8RcaWT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QgX7Jhr2RQg58bnQ' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@getDiagnose',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@getDiagnose',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::QgX7Jhr2RQg58bnQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pOTvospKHYMcwLGO' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@deleteDiagnose',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@deleteDiagnose',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::pOTvospKHYMcwLGO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xskqT4TufQvl66Rg' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@editDiagnose',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@editDiagnose',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::xskqT4TufQvl66Rg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2g8c9UXLqlffB423' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@store',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::2g8c9UXLqlffB423',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ntgu3toJFKuLggiY' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@getAllTreatment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@getAllTreatment',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::ntgu3toJFKuLggiY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Q5X5PZ2AGa9MiIZK' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@show',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@show',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::Q5X5PZ2AGa9MiIZK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r9VeaOzdNUBCPY11' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@destroy',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::r9VeaOzdNUBCPY11',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lqgu2KZmBJooGhlR' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@update',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@update',
        'namespace' => NULL,
        'prefix' => 'api/patient',
        'where' => 
        array (
        ),
        'as' => 'generated::lqgu2KZmBJooGhlR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z9yDxKYOs0XM8uxC' => 
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
        'as' => 'generated::Z9yDxKYOs0XM8uxC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xzVDeQNlGYo1EDeU' => 
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
        'as' => 'generated::xzVDeQNlGYo1EDeU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LZ8TRS974OW2n3OY' => 
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
        'as' => 'generated::LZ8TRS974OW2n3OY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4QRcEQ68rqkCiXkW' => 
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
        'as' => 'generated::4QRcEQ68rqkCiXkW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0YM667xNmqBe4OLP' => 
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
        'as' => 'generated::0YM667xNmqBe4OLP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9mSPF08P7ZCqDjqs' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@uploadDocs',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@uploadDocs',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::9mSPF08P7ZCqDjqs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mIJ66UHxAu7FbPVa' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@getDocuments',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@getDocuments',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::mIJ66UHxAu7FbPVa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z7vBevSay7FR22QR' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@logoutPresc',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@logoutPresc',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::Z7vBevSay7FR22QR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::omyqWHIU7h1GGjgd' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@prescInfo',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@prescInfo',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::omyqWHIU7h1GGjgd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HnSCVRwOcQRMX4Vr' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@editPrescInfo',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\AuthController@editPrescInfo',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::HnSCVRwOcQRMX4Vr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tTDeS44QR2EVu0Hl' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\PrescriberController@desativate',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\PrescriberController@desativate',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::tTDeS44QR2EVu0Hl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VQ3uKnp3T9lniz3f' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\PrescriberController@delete',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\PrescriberController@delete',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::VQ3uKnp3T9lniz3f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z6C6vjbKXjWaYZ47' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@store',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::Z6C6vjbKXjWaYZ47',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TBVsTpzetm7MzfmI' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@getAllTreatments',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@getAllTreatments',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::TBVsTpzetm7MzfmI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7jCjuaikYYj1n6fh' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@getTreatment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@getTreatment',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::7jCjuaikYYj1n6fh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Jp9gwKavrniMKTLC' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@deleteTreatment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@deleteTreatment',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::Jp9gwKavrniMKTLC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ijD3i6MU1Dn4uiyb' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@editTreatment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\TreatmentController@editTreatment',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::ijD3i6MU1Dn4uiyb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8QCFf65YIdfa74ix' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@storePresc',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@storePresc',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::8QCFf65YIdfa74ix',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uwBvv2IWbKvC6SZi' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@getAllTreatmentPresc',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@getAllTreatmentPresc',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::uwBvv2IWbKvC6SZi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nyU9LsPvIwmJtMT1' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@showPresc',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@showPresc',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::nyU9LsPvIwmJtMT1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gQU8CAUaNtysB5Ex' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@destroyPresc',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@destroyPresc',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::gQU8CAUaNtysB5Ex',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IEECnvhC2rqaF1UV' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@updatePresc',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\NewTreatmentController@updatePresc',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::IEECnvhC2rqaF1UV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UlKTRsBVsg4LfzuU' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@store',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::UlKTRsBVsg4LfzuU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Uj24XtcY8Ji9baqt' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@getAllDiagnoses',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@getAllDiagnoses',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::Uj24XtcY8Ji9baqt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p2xsEHouevs0o6H1' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@getDiagnose',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@getDiagnose',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::p2xsEHouevs0o6H1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BK4OdmUwmUtojO93' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@deleteDiagnose',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@deleteDiagnose',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::BK4OdmUwmUtojO93',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UbXAjmq6g9js8z9H' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@editDiagnose',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\DiagnoseController@editDiagnose',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::UbXAjmq6g9js8z9H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IwaTZy7c3ZoIAMlD' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@createPatientUsingPrescriber',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@createPatientUsingPrescriber',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::IwaTZy7c3ZoIAMlD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::44w7WqTf2jzU5E0X' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@connectPrescriberToPatient',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@connectPrescriberToPatient',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::44w7WqTf2jzU5E0X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3w1wr5yB89gAoBUN' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@errasePrescriberInPatient',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@errasePrescriberInPatient',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::3w1wr5yB89gAoBUN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GOWhNGRx2qB6WzfW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/get-pacient-treatment/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@getPacientTreatment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Patient\\PatientController@getPacientTreatment',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::GOWhNGRx2qB6WzfW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LTkI59TCeB5ZpADW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/get-prescriber-patient/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\PrescriberController@getConnectedPatients',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\PrescriberController@getConnectedPatients',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::LTkI59TCeB5ZpADW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NUlSa5vD7PxeKtYw' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AvailabilityController@getAvailability',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AvailabilityController@getAvailability',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::NUlSa5vD7PxeKtYw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6BTeAXlw6891XcwK' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AvailabilityController@store',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AvailabilityController@store',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::6BTeAXlw6891XcwK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4tPWLALO9j3trSTq' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@getVoucher',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@getVoucher',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::4tPWLALO9j3trSTq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4dBYDLS5Vbh3hPEB' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@getVoucherPerId',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@getVoucherPerId',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::4dBYDLS5Vbh3hPEB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::viEVtF7YotqnupNr' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@createVoucher',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@createVoucher',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::viEVtF7YotqnupNr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o2suz5OyXN147fRu' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@updateVoucher',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@updateVoucher',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::o2suz5OyXN147fRu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0Bte6Dy923J34TRX' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@deleteVoucher',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@deleteVoucher',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::0Bte6Dy923J34TRX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Mf2ya198nJxFDxVi' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@useVoucher',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\VoucherController@useVoucher',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::Mf2ya198nJxFDxVi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7l30arz8pMVTHRwv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/prescriber/get-clinic-adress',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\ClinicAdressController@getClinicAdress',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\ClinicAdressController@getClinicAdress',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::7l30arz8pMVTHRwv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xVT65L0RDiuxrdlw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/prescriber/create-clinic-adress',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\ClinicAdressController@createClinicAdress',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\ClinicAdressController@createClinicAdress',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::xVT65L0RDiuxrdlw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TO01CWWmavDK3Xic' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/prescriber/update-clinic-adress',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\ClinicAdressController@updateClinicAdress',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\ClinicAdressController@updateClinicAdress',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::TO01CWWmavDK3Xic',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lSLmVOxWyCNeRAIr' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AppointmentController@createAppointment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AppointmentController@createAppointment',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::lSLmVOxWyCNeRAIr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LsNwN8heNIxlozh2' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AppointmentController@dropAppointment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AppointmentController@dropAppointment',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::LsNwN8heNIxlozh2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::06YhdLDjE61jjJM2' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AppointmentController@nextAppointments',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AppointmentController@nextAppointments',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::06YhdLDjE61jjJM2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bWrqBZwz8ouJHnY0' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AppointmentController@pastAppointments',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AppointmentController@pastAppointments',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::bWrqBZwz8ouJHnY0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8lKVjemZJMPVNzj2' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AppointmentController@endAppointment',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\Prescriber\\AppointmentController@endAppointment',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::8lKVjemZJMPVNzj2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::RlI7D50UgzqCVnqL' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StatisticsController@showProdutoIndicadoPorDiagnostico',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StatisticsController@showProdutoIndicadoPorDiagnostico',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::RlI7D50UgzqCVnqL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kzFvw9ME0dHeRuBQ' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\StatisticsController@showPercepcaoDeMelhora',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\StatisticsController@showPercepcaoDeMelhora',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::kzFvw9ME0dHeRuBQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IRSljer8Cmk2gYXk' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@listSymptoms',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@listSymptoms',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::IRSljer8Cmk2gYXk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fXcBexVuhXcUfbwv' => 
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
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@cadastreSymptom',
        'controller' => 'App\\Http\\Controllers\\Api\\V1\\SymptomsController@cadastreSymptom',
        'namespace' => NULL,
        'prefix' => 'api/prescriber',
        'where' => 
        array (
        ),
        'as' => 'generated::fXcBexVuhXcUfbwv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V5LNaV1ZatgRhP7M' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@cadastroSintomas',
        'controller' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@cadastroSintomas',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::V5LNaV1ZatgRhP7M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u6KHJK15BNhyR7p3' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@cadastroMedicamentos',
        'controller' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@cadastroMedicamentos',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::u6KHJK15BNhyR7p3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xQgfGnxvnyYUVkS2' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@cadastroDiagnosticos',
        'controller' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@cadastroDiagnosticos',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::xQgfGnxvnyYUVkS2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EiZLHtwnOBho997v' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@validacaoDocumentos',
        'controller' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@validacaoDocumentos',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::EiZLHtwnOBho997v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zP3xf5EVyMXi5OJe' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@configPushs',
        'controller' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@configPushs',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::zP3xf5EVyMXi5OJe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lwLw77qF0aiQASel' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@farmaciasParceiras',
        'controller' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@farmaciasParceiras',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::lwLw77qF0aiQASel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LA3Rcl6Ywzqq3fVb' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@usuarios',
        'controller' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@usuarios',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::LA3Rcl6Ywzqq3fVb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tEyH8fxoRwQigxi4' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@descontoPromocao',
        'controller' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@descontoPromocao',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::tEyH8fxoRwQigxi4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1XIYWWtqhouvSL38' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@extracaoDados',
        'controller' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@extracaoDados',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::1XIYWWtqhouvSL38',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jYjFg3ZsWZIZryh4' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@permissoes',
        'controller' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@permissoes',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::jYjFg3ZsWZIZryh4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OBTnESznFoDrMwwF' => 
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
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@listarUsuarios',
        'controller' => 'App\\Http\\Controllers\\Admin\\ViewsAdminController@listarUsuarios',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::OBTnESznFoDrMwwF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TkXDQuE0fynmF2nq' => 
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
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:44:"function () {
    return \\view(\'welcome\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000004570000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::TkXDQuE0fynmF2nq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iLsi4F3WDL8z35Vr' => 
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
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:42:"function () {
    return \\view(\'login\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000004590000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::iLsi4F3WDL8z35Vr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ipx4zFGw0r0L1Fvp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:41:"function () {
    return \\view(\'home\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000000000045b0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Ipx4zFGw0r0L1Fvp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
