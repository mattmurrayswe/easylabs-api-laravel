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
            '_route' => 'generated::RgZ0TOaPyHkZKHU2',
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
            '_route' => 'generated::KzvsQw38XGLzUge7',
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
            '_route' => 'generated::y3eQ8JhpyCfaRkJ6',
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
            '_route' => 'generated::2sKrqGKhqBAr57S5',
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
            '_route' => 'generated::HkA4aVUxYbLE5vBT',
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
            '_route' => 'generated::DuEz4MgaKX8h1GRm',
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
            '_route' => 'generated::JrJibd2ZETYGbgdP',
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
            '_route' => 'generated::cR5LahQbMD9Gaywz',
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
            '_route' => 'generated::0OVY6CC86MgV8Bzk',
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
            '_route' => 'generated::CN9fdRlqvgmnlT5z',
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
            '_route' => 'generated::Pd9m2bnMi5JcT2eM',
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
            '_route' => 'generated::82YTKaNu33LckGmT',
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
            '_route' => 'generated::EsI55hlYdmcDMf21',
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
            '_route' => 'generated::J56VGOrE14gWcgwX',
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
            '_route' => 'generated::72r0V3GxSN0La8Pc',
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
            '_route' => 'generated::lRW2pL1ALco1MPvm',
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
            '_route' => 'generated::4st6MVMBldqnMPfJ',
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
            '_route' => 'generated::rTzOApYOAWbFoggh',
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
            '_route' => 'generated::mobvqLTwrosU96QQ',
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
            '_route' => 'generated::vRRqQFGzLnvr4prO',
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
            '_route' => 'generated::sGJ7WuMn9ayqbT8j',
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
            '_route' => 'generated::5rD0Om5Wbn07A8Rn',
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
            '_route' => 'generated::aysUYEoU7HTTtGAF',
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
            '_route' => 'generated::4wWImQqiyFL8NhgB',
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
            '_route' => 'generated::Hd6MyGUpHztx8V4b',
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
            '_route' => 'generated::jReNPLu21SQqw60Y',
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
            '_route' => 'generated::eBiW10uegfFGOCAE',
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
            '_route' => 'generated::FMYaUt6bpINgSrJ7',
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
            '_route' => 'generated::7blXJh8qcfhVl6M0',
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
            '_route' => 'generated::QWdLhGnJHVNb8CQT',
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
            '_route' => 'generated::5sljzgxJe2PVA61c',
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
            '_route' => 'generated::rSvs11sDPSyOyYOF',
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
            '_route' => 'generated::fRNIPvBVL0RtbicK',
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
            '_route' => 'generated::QfjiN1dFNtAqwLLE',
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
            '_route' => 'generated::tebRRMGvvsmeeC9l',
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
            '_route' => 'generated::EME4TeI7bHCiCLew',
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
            '_route' => 'generated::UbdKkFjZK3isLx8n',
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
            '_route' => 'generated::M2Ym5He4GAJgc86W',
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
            '_route' => 'generated::KiTEIFygDYszpDSV',
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
            '_route' => 'generated::lIIkrTQC7WhKTfsE',
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
            '_route' => 'generated::PzUhTWF6X1H9WhrS',
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
            '_route' => 'generated::xo9vBnBANlw4SRDF',
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
            '_route' => 'generated::xQVnQf4vjpjraycq',
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
            '_route' => 'generated::4H0PTzEtU3FJc105',
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
            '_route' => 'generated::AFvWxcHrAsUexnMW',
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
            '_route' => 'generated::cF6fS0oTDnus2IB7',
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
            '_route' => 'generated::3BQoJZL9eTA35Ds7',
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
            '_route' => 'generated::z7WciPuFXlsKISJf',
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
            '_route' => 'generated::cPDzUTIxZr3BFu8d',
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
            '_route' => 'generated::fi8cyPkbOBuqVuxn',
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
            '_route' => 'generated::gXxYZDewxEVZMGS0',
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
            '_route' => 'generated::XnSrY3QhVoIT52Tn',
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
            '_route' => 'generated::YguD6rkWzAx4bqO4',
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
            '_route' => 'generated::SbOTISYqj2sZbcSc',
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
            '_route' => 'generated::YESYBI91H6CfkbhK',
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
            '_route' => 'generated::Qd1e7EMLrnW8PiZz',
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
            '_route' => 'generated::I0i11b11Wweg8SAR',
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
            '_route' => 'generated::dlbd0FMXW7cD1qYM',
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
            '_route' => 'generated::qWbYLgIDYhiCr7eR',
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
            '_route' => 'generated::l9qU0fOIammaDT6I',
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
            '_route' => 'generated::bSjcO3EdwhtKvgPm',
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
            '_route' => 'generated::nK2q5nN8f3RwloM8',
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
            '_route' => 'generated::Qskqyfg5VLeFi3fX',
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
            '_route' => 'generated::1LQx1FsEkk00avE6',
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
            '_route' => 'generated::IdBcEQL6PcEAX8U6',
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
            '_route' => 'generated::BECe0yEt10bl6iW3',
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
            '_route' => 'generated::A5uPV7juUt7KPlQg',
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
            '_route' => 'generated::I6bwZhxO4ohxyZAX',
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
            '_route' => 'generated::6S2XiFSXXpxZ1Rsf',
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
            '_route' => 'generated::ODAJF64pzD7dwmls',
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
            '_route' => 'generated::K0Uk3Pt5OerY1CiC',
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
            '_route' => 'generated::SkitBKYmWmnK0KL3',
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
            '_route' => 'generated::y2kv0LLEnIo3mdG0',
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
            '_route' => 'generated::V0WdRg2MT0IW5Wy9',
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
            '_route' => 'generated::8k1OPBnDE8r2P8Ed',
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
            '_route' => 'generated::aNYL97zFgV6UPJnT',
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
            '_route' => 'generated::aSAZr5GAjZuXENQZ',
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
            '_route' => 'generated::X9GzVXMxRKV50qS6',
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
            '_route' => 'generated::d9cfHFr6TwlpL66X',
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
            '_route' => 'generated::IBw55cgjg64zzAR8',
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
            '_route' => 'generated::UNi1NgvGGXJzkEky',
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
            '_route' => 'generated::YMk4Zbu7IQacDEav',
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
            '_route' => 'generated::Svjvl1UGRMZf5KW4',
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
            '_route' => 'generated::o1f1SB0pcCM4En9e',
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
            '_route' => 'generated::zQMKQEOn7MUGIrc1',
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
            '_route' => 'generated::AAG7xyvIF22hE375',
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
            '_route' => 'generated::KlwZvw57AMYZwPhX',
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
            '_route' => 'generated::HSHq6tDneZ6Rmwpc',
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
            '_route' => 'generated::YC1X5JUXcz3JQDbQ',
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
            '_route' => 'generated::21mB0G8Imcim1bdO',
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
            '_route' => 'generated::7u9FqhRE8zF1z24j',
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
            '_route' => 'generated::K2L5XI5g9ySeDJbw',
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
            '_route' => 'generated::4fPVxW8MNS6LJML5',
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
            '_route' => 'generated::zRXDuHA8laehHckH',
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
            '_route' => 'generated::25VIGIqOqoANmWuC',
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
            '_route' => 'generated::7IXs1scW1lhUF5qp',
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
            '_route' => 'generated::25DX9ZQlfy9Z97DT',
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
            '_route' => 'generated::nHO5d1FDUtdTLeLJ',
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
            '_route' => 'generated::o8HUmFgbGeu14XKd',
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
            '_route' => 'generated::kqafBmRayvMxVEht',
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
            '_route' => 'generated::uPYYfSmGV92OOPsm',
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
            '_route' => 'generated::VxBFEiQOY02TKgJr',
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
            '_route' => 'generated::wtKdTYrkvH655BPe',
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
            '_route' => 'generated::VbLBohW5zoaou62E',
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
            '_route' => 'generated::Xsj3oQx5xCywpGGA',
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
            '_route' => 'generated::0krl9rqVNH8jm65t',
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
            '_route' => 'generated::TumeSf9GoC8tw5rG',
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
            '_route' => 'generated::aG88aeH5RvSY7rxT',
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
            '_route' => 'generated::fByJHoFg8e2H5SaB',
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
            '_route' => 'generated::N7NcooOUeH0uMMEk',
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
            '_route' => 'generated::kczU3OoEnckwsRUG',
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
            '_route' => 'generated::jomTGMB7Gz2LPBqC',
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
            '_route' => 'generated::NRAkrW8kgmRY33TM',
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
            '_route' => 'generated::CpExqV086JJvmrtA',
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
            '_route' => 'generated::19oDZUcXD9rAF85U',
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
            '_route' => 'generated::ZPZf1tSN4yJ7ARcj',
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
            '_route' => 'generated::QvrAHwi2cAaRSIZc',
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
            '_route' => 'generated::mKz7xwioI6eDflqE',
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
            '_route' => 'generated::ObAHZE3438zfVn64',
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
            '_route' => 'generated::B91jwbNnkGf4JCYE',
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
            '_route' => 'generated::Bz0D67g04yoBQdMx',
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
            '_route' => 'generated::KAkcp5hvJpKFveVQ',
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
            '_route' => 'generated::MN3IEmunWgZHHzwK',
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
            '_route' => 'generated::96APSIS5wlW1W1Z3',
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
            '_route' => 'generated::17nAQF7rBSreRxix',
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
            '_route' => 'generated::yZJCfAtaBmytsIJq',
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
            '_route' => 'generated::CO8ctUYsbGTWV79J',
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
            '_route' => 'generated::K8OWSH0Mn5FXeNQR',
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
            '_route' => 'generated::L9nAreUHSrlssNxs',
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
            '_route' => 'generated::jiodjuSZeby6FsqS',
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
            '_route' => 'generated::4Bio480mxSn0YLF9',
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
            '_route' => 'generated::8NyoShHO1DIDDuNl',
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
            '_route' => 'generated::kVZGL8xU79tRjEKB',
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
            '_route' => 'generated::FxYMeUkMG9u87MoX',
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
            '_route' => 'generated::4yppiPWueyAfiltY',
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
            '_route' => 'generated::MPcJ1yoCo9aTN86v',
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
            '_route' => 'generated::tUvqXpt8dvGpEvD8',
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
            '_route' => 'generated::Sn5anyBkyfQ4ig7m',
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
            '_route' => 'generated::AglQ87JSjOHF7BgJ',
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
            '_route' => 'generated::dlyEUzIvBVJ8LQi1',
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
            '_route' => 'generated::FBeyRyinNJgVuCiT',
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
            '_route' => 'generated::m10YhSSpVL9X02FX',
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
            '_route' => 'generated::SrxfhLQCLtJHZxsY',
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
            '_route' => 'generated::ykYPmuHp2R9vzwAS',
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
            '_route' => 'generated::STOulFR0Hnp1o8hr',
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
            '_route' => 'generated::TUPQqqKDhreFj7cN',
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
      538 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c1py9zFKndyf8eT8',
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
            '_route' => 'generated::hdXkJqDO3yujnSUe',
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
            '_route' => 'generated::vCb21e8oAuYiSMqi',
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
            '_route' => 'generated::PKTy8IEwRLR5FujS',
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
            '_route' => 'generated::nnJ0etH569M6robe',
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
            '_route' => 'generated::WsBti0kUwoR1z0SK',
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
            '_route' => 'generated::sH4NbmW7A4VS0wjk',
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
            '_route' => 'generated::bHsrnDueSf6q18YM',
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
            '_route' => 'generated::h56LKz3yx0edJJKt',
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
            '_route' => 'generated::uuaRqosiYhTHjLvg',
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
            '_route' => 'generated::W9tVMp0l6pEbYOpH',
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
            '_route' => 'generated::Rz3yxMA1nhwFzJNU',
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
            '_route' => 'generated::7meGyKmYN7qc2IyP',
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
            '_route' => 'generated::KOEZ8UlX6Mw9FsGF',
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
            '_route' => 'generated::WmpairU3YCt2nj9w',
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
            '_route' => 'generated::DO1IHnlvL2bcejIk',
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
            '_route' => 'generated::gKmbBGhsbirKR2GB',
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
            '_route' => 'generated::BWCoC1AJ2PpbFfyi',
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
            '_route' => 'generated::SueVOk1WcD12kRtH',
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
            '_route' => 'generated::jf1UW9RrO5njANYO',
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
            '_route' => 'generated::a8tncSXTcTaCi5iT',
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
            '_route' => 'generated::H6CFddmNUQmyNNJo',
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
            '_route' => 'generated::SbdDc5bhMtPOZn7L',
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
            '_route' => 'generated::5JVRKtNZYMhwAEwg',
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
            '_route' => 'generated::qzzPqikd7QPXEZ0o',
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
            '_route' => 'generated::YFtzECT2gJMttRVc',
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
            '_route' => 'generated::bYD4KeUO1HSRPBZz',
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
            '_route' => 'generated::GUqdF0kv0NOsrcUg',
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
            '_route' => 'generated::w0TdOCsN1Ra8ACSU',
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
            '_route' => 'generated::jpj9yExceDmAoMbA',
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
            '_route' => 'generated::sjKDup72P2s3EPmf',
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
            '_route' => 'generated::M54LiJSsW7ExjOXw',
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
            '_route' => 'generated::fSLhHAryhJmWasuz',
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
            '_route' => 'generated::d6pQyMKYS0GubNJr',
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
            '_route' => 'generated::or15orJ50fywFobt',
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
            '_route' => 'generated::ShNrPIThhe7ODBA8',
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
            '_route' => 'generated::y9VsCedyhhu4hBP5',
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
            '_route' => 'generated::GRubGymV1SKSWclz',
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
            '_route' => 'generated::Ltg8UXUfZhaF9syR',
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
            '_route' => 'generated::Bwpq7lWW8uUZ9Sh4',
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
            '_route' => 'generated::xw2qTDjIDeG7EcXw',
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
            '_route' => 'generated::rBMKJrY6Jg3bvdp6',
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
            '_route' => 'generated::v6RdsbMY8aOJb778',
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
            '_route' => 'generated::G8JJX14MIGcdnOSI',
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
            '_route' => 'generated::s9vSAl0UtoClJW8e',
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
            '_route' => 'generated::ivZ3B4ZKBNzVEWZZ',
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
            '_route' => 'generated::JxKG88jNBqgXgyWK',
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
            '_route' => 'generated::i85NwjFXKbIhG16x',
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
            '_route' => 'generated::naQAMbjCC5I17i4Z',
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
            '_route' => 'generated::PhSDyr1oFlH6XUMt',
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
            '_route' => 'generated::AovW51zMHk8Pn19e',
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
            '_route' => 'generated::xhmPTmrQ8btS0d2f',
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
            '_route' => 'generated::kZGSaYncg1HeCeNa',
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
            '_route' => 'generated::PftxShSkSQUy8b1p',
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
            '_route' => 'generated::jDcAXKZFMohYOHyr',
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
            '_route' => 'generated::iHYjQbT4lmz00MPJ',
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
            '_route' => 'generated::H4JOnokdMhPmHI1c',
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
            '_route' => 'generated::4A8baIqnvMEdhTCi',
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
    'generated::RgZ0TOaPyHkZKHU2' => 
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
        'as' => 'generated::RgZ0TOaPyHkZKHU2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L9nAreUHSrlssNxs' => 
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
        'as' => 'generated::L9nAreUHSrlssNxs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jiodjuSZeby6FsqS' => 
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
        'as' => 'generated::jiodjuSZeby6FsqS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KzvsQw38XGLzUge7' => 
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
        'as' => 'generated::KzvsQw38XGLzUge7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4Bio480mxSn0YLF9' => 
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
        'as' => 'generated::4Bio480mxSn0YLF9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8NyoShHO1DIDDuNl' => 
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
        'as' => 'generated::8NyoShHO1DIDDuNl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kVZGL8xU79tRjEKB' => 
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
        'as' => 'generated::kVZGL8xU79tRjEKB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FxYMeUkMG9u87MoX' => 
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
        'as' => 'generated::FxYMeUkMG9u87MoX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::y3eQ8JhpyCfaRkJ6' => 
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
        'as' => 'generated::y3eQ8JhpyCfaRkJ6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2sKrqGKhqBAr57S5' => 
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
        'as' => 'generated::2sKrqGKhqBAr57S5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HkA4aVUxYbLE5vBT' => 
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
        'as' => 'generated::HkA4aVUxYbLE5vBT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::DuEz4MgaKX8h1GRm' => 
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
        'as' => 'generated::DuEz4MgaKX8h1GRm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JrJibd2ZETYGbgdP' => 
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
        'as' => 'generated::JrJibd2ZETYGbgdP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::cR5LahQbMD9Gaywz' => 
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
        'as' => 'generated::cR5LahQbMD9Gaywz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0OVY6CC86MgV8Bzk' => 
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
        'as' => 'generated::0OVY6CC86MgV8Bzk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4yppiPWueyAfiltY' => 
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
        'as' => 'generated::4yppiPWueyAfiltY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MPcJ1yoCo9aTN86v' => 
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
        'as' => 'generated::MPcJ1yoCo9aTN86v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CN9fdRlqvgmnlT5z' => 
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
        'as' => 'generated::CN9fdRlqvgmnlT5z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Sn5anyBkyfQ4ig7m' => 
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
        'as' => 'generated::Sn5anyBkyfQ4ig7m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Pd9m2bnMi5JcT2eM' => 
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
        'as' => 'generated::Pd9m2bnMi5JcT2eM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AglQ87JSjOHF7BgJ' => 
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
        'as' => 'generated::AglQ87JSjOHF7BgJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dlyEUzIvBVJ8LQi1' => 
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
        'as' => 'generated::dlyEUzIvBVJ8LQi1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::82YTKaNu33LckGmT' => 
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
        'as' => 'generated::82YTKaNu33LckGmT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EsI55hlYdmcDMf21' => 
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
        'as' => 'generated::EsI55hlYdmcDMf21',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FBeyRyinNJgVuCiT' => 
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
        'as' => 'generated::FBeyRyinNJgVuCiT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m10YhSSpVL9X02FX' => 
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
        'as' => 'generated::m10YhSSpVL9X02FX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SrxfhLQCLtJHZxsY' => 
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
        'as' => 'generated::SrxfhLQCLtJHZxsY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::J56VGOrE14gWcgwX' => 
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
        'as' => 'generated::J56VGOrE14gWcgwX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::72r0V3GxSN0La8Pc' => 
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
        'as' => 'generated::72r0V3GxSN0La8Pc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ykYPmuHp2R9vzwAS' => 
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
        'as' => 'generated::ykYPmuHp2R9vzwAS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::STOulFR0Hnp1o8hr' => 
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
        'as' => 'generated::STOulFR0Hnp1o8hr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TUPQqqKDhreFj7cN' => 
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
        'as' => 'generated::TUPQqqKDhreFj7cN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lRW2pL1ALco1MPvm' => 
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
        'as' => 'generated::lRW2pL1ALco1MPvm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4st6MVMBldqnMPfJ' => 
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
        'as' => 'generated::4st6MVMBldqnMPfJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::naQAMbjCC5I17i4Z' => 
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
        'as' => 'generated::naQAMbjCC5I17i4Z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PhSDyr1oFlH6XUMt' => 
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
        'as' => 'generated::PhSDyr1oFlH6XUMt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AovW51zMHk8Pn19e' => 
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
        'as' => 'generated::AovW51zMHk8Pn19e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rTzOApYOAWbFoggh' => 
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
        'as' => 'generated::rTzOApYOAWbFoggh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mobvqLTwrosU96QQ' => 
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
        'as' => 'generated::mobvqLTwrosU96QQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c1py9zFKndyf8eT8' => 
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
        'as' => 'generated::c1py9zFKndyf8eT8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hdXkJqDO3yujnSUe' => 
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
        'as' => 'generated::hdXkJqDO3yujnSUe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vCb21e8oAuYiSMqi' => 
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
        'as' => 'generated::vCb21e8oAuYiSMqi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vRRqQFGzLnvr4prO' => 
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
        'as' => 'generated::vRRqQFGzLnvr4prO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sGJ7WuMn9ayqbT8j' => 
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
        'as' => 'generated::sGJ7WuMn9ayqbT8j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5rD0Om5Wbn07A8Rn' => 
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
        'as' => 'generated::5rD0Om5Wbn07A8Rn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aysUYEoU7HTTtGAF' => 
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
        'as' => 'generated::aysUYEoU7HTTtGAF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xhmPTmrQ8btS0d2f' => 
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
        'as' => 'generated::xhmPTmrQ8btS0d2f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kZGSaYncg1HeCeNa' => 
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
        'as' => 'generated::kZGSaYncg1HeCeNa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tUvqXpt8dvGpEvD8' => 
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
        'as' => 'generated::tUvqXpt8dvGpEvD8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PftxShSkSQUy8b1p' => 
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
        'as' => 'generated::PftxShSkSQUy8b1p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jDcAXKZFMohYOHyr' => 
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
        'as' => 'generated::jDcAXKZFMohYOHyr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iHYjQbT4lmz00MPJ' => 
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
        'as' => 'generated::iHYjQbT4lmz00MPJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H4JOnokdMhPmHI1c' => 
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
        'as' => 'generated::H4JOnokdMhPmHI1c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4A8baIqnvMEdhTCi' => 
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
        'as' => 'generated::4A8baIqnvMEdhTCi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4wWImQqiyFL8NhgB' => 
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
        'as' => 'generated::4wWImQqiyFL8NhgB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Hd6MyGUpHztx8V4b' => 
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
        'as' => 'generated::Hd6MyGUpHztx8V4b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::jReNPLu21SQqw60Y' => 
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
        'as' => 'generated::jReNPLu21SQqw60Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eBiW10uegfFGOCAE' => 
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
        'as' => 'generated::eBiW10uegfFGOCAE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FMYaUt6bpINgSrJ7' => 
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
        'as' => 'generated::FMYaUt6bpINgSrJ7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7blXJh8qcfhVl6M0' => 
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
        'as' => 'generated::7blXJh8qcfhVl6M0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QWdLhGnJHVNb8CQT' => 
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
        'as' => 'generated::QWdLhGnJHVNb8CQT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5sljzgxJe2PVA61c' => 
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
        'as' => 'generated::5sljzgxJe2PVA61c',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rSvs11sDPSyOyYOF' => 
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
        'as' => 'generated::rSvs11sDPSyOyYOF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fRNIPvBVL0RtbicK' => 
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
        'as' => 'generated::fRNIPvBVL0RtbicK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QfjiN1dFNtAqwLLE' => 
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
        'as' => 'generated::QfjiN1dFNtAqwLLE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tebRRMGvvsmeeC9l' => 
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
        'as' => 'generated::tebRRMGvvsmeeC9l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EME4TeI7bHCiCLew' => 
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
        'as' => 'generated::EME4TeI7bHCiCLew',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PKTy8IEwRLR5FujS' => 
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
        'as' => 'generated::PKTy8IEwRLR5FujS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UbdKkFjZK3isLx8n' => 
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
        'as' => 'generated::UbdKkFjZK3isLx8n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M2Ym5He4GAJgc86W' => 
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
        'as' => 'generated::M2Ym5He4GAJgc86W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KiTEIFygDYszpDSV' => 
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
        'as' => 'generated::KiTEIFygDYszpDSV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lIIkrTQC7WhKTfsE' => 
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
        'as' => 'generated::lIIkrTQC7WhKTfsE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nnJ0etH569M6robe' => 
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
        'as' => 'generated::nnJ0etH569M6robe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WsBti0kUwoR1z0SK' => 
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
        'as' => 'generated::WsBti0kUwoR1z0SK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PzUhTWF6X1H9WhrS' => 
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
        'as' => 'generated::PzUhTWF6X1H9WhrS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sH4NbmW7A4VS0wjk' => 
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
        'as' => 'generated::sH4NbmW7A4VS0wjk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bHsrnDueSf6q18YM' => 
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
        'as' => 'generated::bHsrnDueSf6q18YM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Rz3yxMA1nhwFzJNU' => 
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
        'as' => 'generated::Rz3yxMA1nhwFzJNU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xo9vBnBANlw4SRDF' => 
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
        'as' => 'generated::xo9vBnBANlw4SRDF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xQVnQf4vjpjraycq' => 
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
        'as' => 'generated::xQVnQf4vjpjraycq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4H0PTzEtU3FJc105' => 
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
        'as' => 'generated::4H0PTzEtU3FJc105',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AFvWxcHrAsUexnMW' => 
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
        'as' => 'generated::AFvWxcHrAsUexnMW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cF6fS0oTDnus2IB7' => 
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
        'as' => 'generated::cF6fS0oTDnus2IB7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3BQoJZL9eTA35Ds7' => 
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
        'as' => 'generated::3BQoJZL9eTA35Ds7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::z7WciPuFXlsKISJf' => 
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
        'as' => 'generated::z7WciPuFXlsKISJf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cPDzUTIxZr3BFu8d' => 
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
        'as' => 'generated::cPDzUTIxZr3BFu8d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fi8cyPkbOBuqVuxn' => 
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
        'as' => 'generated::fi8cyPkbOBuqVuxn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gXxYZDewxEVZMGS0' => 
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
        'as' => 'generated::gXxYZDewxEVZMGS0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XnSrY3QhVoIT52Tn' => 
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
        'as' => 'generated::XnSrY3QhVoIT52Tn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YguD6rkWzAx4bqO4' => 
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
        'as' => 'generated::YguD6rkWzAx4bqO4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SbOTISYqj2sZbcSc' => 
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
        'as' => 'generated::SbOTISYqj2sZbcSc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YESYBI91H6CfkbhK' => 
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
        'as' => 'generated::YESYBI91H6CfkbhK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qd1e7EMLrnW8PiZz' => 
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
        'as' => 'generated::Qd1e7EMLrnW8PiZz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7meGyKmYN7qc2IyP' => 
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
        'as' => 'generated::7meGyKmYN7qc2IyP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I0i11b11Wweg8SAR' => 
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
        'as' => 'generated::I0i11b11Wweg8SAR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KOEZ8UlX6Mw9FsGF' => 
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
        'as' => 'generated::KOEZ8UlX6Mw9FsGF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WmpairU3YCt2nj9w' => 
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
        'as' => 'generated::WmpairU3YCt2nj9w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dlbd0FMXW7cD1qYM' => 
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
        'as' => 'generated::dlbd0FMXW7cD1qYM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qWbYLgIDYhiCr7eR' => 
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
        'as' => 'generated::qWbYLgIDYhiCr7eR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DO1IHnlvL2bcejIk' => 
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
        'as' => 'generated::DO1IHnlvL2bcejIk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gKmbBGhsbirKR2GB' => 
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
        'as' => 'generated::gKmbBGhsbirKR2GB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BWCoC1AJ2PpbFfyi' => 
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
        'as' => 'generated::BWCoC1AJ2PpbFfyi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l9qU0fOIammaDT6I' => 
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
        'as' => 'generated::l9qU0fOIammaDT6I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bSjcO3EdwhtKvgPm' => 
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
        'as' => 'generated::bSjcO3EdwhtKvgPm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SueVOk1WcD12kRtH' => 
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
        'as' => 'generated::SueVOk1WcD12kRtH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jf1UW9RrO5njANYO' => 
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
        'as' => 'generated::jf1UW9RrO5njANYO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::a8tncSXTcTaCi5iT' => 
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
        'as' => 'generated::a8tncSXTcTaCi5iT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nK2q5nN8f3RwloM8' => 
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
        'as' => 'generated::nK2q5nN8f3RwloM8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Qskqyfg5VLeFi3fX' => 
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
        'as' => 'generated::Qskqyfg5VLeFi3fX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::h56LKz3yx0edJJKt' => 
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
        'as' => 'generated::h56LKz3yx0edJJKt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uuaRqosiYhTHjLvg' => 
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
        'as' => 'generated::uuaRqosiYhTHjLvg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::W9tVMp0l6pEbYOpH' => 
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
        'as' => 'generated::W9tVMp0l6pEbYOpH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1LQx1FsEkk00avE6' => 
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
        'as' => 'generated::1LQx1FsEkk00avE6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IdBcEQL6PcEAX8U6' => 
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
        'as' => 'generated::IdBcEQL6PcEAX8U6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::H6CFddmNUQmyNNJo' => 
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
        'as' => 'generated::H6CFddmNUQmyNNJo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SbdDc5bhMtPOZn7L' => 
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
        'as' => 'generated::SbdDc5bhMtPOZn7L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5JVRKtNZYMhwAEwg' => 
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
        'as' => 'generated::5JVRKtNZYMhwAEwg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BECe0yEt10bl6iW3' => 
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
        'as' => 'generated::BECe0yEt10bl6iW3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::A5uPV7juUt7KPlQg' => 
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
        'as' => 'generated::A5uPV7juUt7KPlQg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::I6bwZhxO4ohxyZAX' => 
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
        'as' => 'generated::I6bwZhxO4ohxyZAX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6S2XiFSXXpxZ1Rsf' => 
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
        'as' => 'generated::6S2XiFSXXpxZ1Rsf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ODAJF64pzD7dwmls' => 
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
        'as' => 'generated::ODAJF64pzD7dwmls',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K0Uk3Pt5OerY1CiC' => 
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
        'as' => 'generated::K0Uk3Pt5OerY1CiC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SkitBKYmWmnK0KL3' => 
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
        'as' => 'generated::SkitBKYmWmnK0KL3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y2kv0LLEnIo3mdG0' => 
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
        'as' => 'generated::y2kv0LLEnIo3mdG0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::V0WdRg2MT0IW5Wy9' => 
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
        'as' => 'generated::V0WdRg2MT0IW5Wy9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8k1OPBnDE8r2P8Ed' => 
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
        'as' => 'generated::8k1OPBnDE8r2P8Ed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aNYL97zFgV6UPJnT' => 
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
        'as' => 'generated::aNYL97zFgV6UPJnT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aSAZr5GAjZuXENQZ' => 
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
        'as' => 'generated::aSAZr5GAjZuXENQZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X9GzVXMxRKV50qS6' => 
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
        'as' => 'generated::X9GzVXMxRKV50qS6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d9cfHFr6TwlpL66X' => 
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
        'as' => 'generated::d9cfHFr6TwlpL66X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qzzPqikd7QPXEZ0o' => 
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
        'as' => 'generated::qzzPqikd7QPXEZ0o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YFtzECT2gJMttRVc' => 
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
        'as' => 'generated::YFtzECT2gJMttRVc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bYD4KeUO1HSRPBZz' => 
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
        'as' => 'generated::bYD4KeUO1HSRPBZz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w0TdOCsN1Ra8ACSU' => 
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
        'as' => 'generated::w0TdOCsN1Ra8ACSU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jpj9yExceDmAoMbA' => 
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
        'as' => 'generated::jpj9yExceDmAoMbA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IBw55cgjg64zzAR8' => 
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
        'as' => 'generated::IBw55cgjg64zzAR8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UNi1NgvGGXJzkEky' => 
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
        'as' => 'generated::UNi1NgvGGXJzkEky',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YMk4Zbu7IQacDEav' => 
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
        'as' => 'generated::YMk4Zbu7IQacDEav',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::or15orJ50fywFobt' => 
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
        'as' => 'generated::or15orJ50fywFobt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ShNrPIThhe7ODBA8' => 
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
        'as' => 'generated::ShNrPIThhe7ODBA8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y9VsCedyhhu4hBP5' => 
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
        'as' => 'generated::y9VsCedyhhu4hBP5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Svjvl1UGRMZf5KW4' => 
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
        'as' => 'generated::Svjvl1UGRMZf5KW4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o1f1SB0pcCM4En9e' => 
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
        'as' => 'generated::o1f1SB0pcCM4En9e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GRubGymV1SKSWclz' => 
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
        'as' => 'generated::GRubGymV1SKSWclz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ltg8UXUfZhaF9syR' => 
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
        'as' => 'generated::Ltg8UXUfZhaF9syR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Bwpq7lWW8uUZ9Sh4' => 
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
        'as' => 'generated::Bwpq7lWW8uUZ9Sh4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zQMKQEOn7MUGIrc1' => 
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
        'as' => 'generated::zQMKQEOn7MUGIrc1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AAG7xyvIF22hE375' => 
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
        'as' => 'generated::AAG7xyvIF22hE375',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xw2qTDjIDeG7EcXw' => 
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
        'as' => 'generated::xw2qTDjIDeG7EcXw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rBMKJrY6Jg3bvdp6' => 
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
        'as' => 'generated::rBMKJrY6Jg3bvdp6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::v6RdsbMY8aOJb778' => 
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
        'as' => 'generated::v6RdsbMY8aOJb778',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KlwZvw57AMYZwPhX' => 
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
        'as' => 'generated::KlwZvw57AMYZwPhX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HSHq6tDneZ6Rmwpc' => 
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
        'as' => 'generated::HSHq6tDneZ6Rmwpc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sjKDup72P2s3EPmf' => 
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
        'as' => 'generated::sjKDup72P2s3EPmf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::M54LiJSsW7ExjOXw' => 
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
        'as' => 'generated::M54LiJSsW7ExjOXw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fSLhHAryhJmWasuz' => 
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
        'as' => 'generated::fSLhHAryhJmWasuz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YC1X5JUXcz3JQDbQ' => 
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
        'as' => 'generated::YC1X5JUXcz3JQDbQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::21mB0G8Imcim1bdO' => 
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
        'as' => 'generated::21mB0G8Imcim1bdO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7u9FqhRE8zF1z24j' => 
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
        'as' => 'generated::7u9FqhRE8zF1z24j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K2L5XI5g9ySeDJbw' => 
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
        'as' => 'generated::K2L5XI5g9ySeDJbw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4fPVxW8MNS6LJML5' => 
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
        'as' => 'generated::4fPVxW8MNS6LJML5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zRXDuHA8laehHckH' => 
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
        'as' => 'generated::zRXDuHA8laehHckH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::25VIGIqOqoANmWuC' => 
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
        'as' => 'generated::25VIGIqOqoANmWuC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7IXs1scW1lhUF5qp' => 
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
        'as' => 'generated::7IXs1scW1lhUF5qp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G8JJX14MIGcdnOSI' => 
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
        'as' => 'generated::G8JJX14MIGcdnOSI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::25DX9ZQlfy9Z97DT' => 
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
        'as' => 'generated::25DX9ZQlfy9Z97DT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nHO5d1FDUtdTLeLJ' => 
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
        'as' => 'generated::nHO5d1FDUtdTLeLJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::o8HUmFgbGeu14XKd' => 
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
        'as' => 'generated::o8HUmFgbGeu14XKd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kqafBmRayvMxVEht' => 
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
        'as' => 'generated::kqafBmRayvMxVEht',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uPYYfSmGV92OOPsm' => 
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
        'as' => 'generated::uPYYfSmGV92OOPsm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VxBFEiQOY02TKgJr' => 
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
        'as' => 'generated::VxBFEiQOY02TKgJr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ivZ3B4ZKBNzVEWZZ' => 
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
        'as' => 'generated::ivZ3B4ZKBNzVEWZZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wtKdTYrkvH655BPe' => 
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
        'as' => 'generated::wtKdTYrkvH655BPe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JxKG88jNBqgXgyWK' => 
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
        'as' => 'generated::JxKG88jNBqgXgyWK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i85NwjFXKbIhG16x' => 
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
        'as' => 'generated::i85NwjFXKbIhG16x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VbLBohW5zoaou62E' => 
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
        'as' => 'generated::VbLBohW5zoaou62E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Xsj3oQx5xCywpGGA' => 
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
        'as' => 'generated::Xsj3oQx5xCywpGGA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0krl9rqVNH8jm65t' => 
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
        'as' => 'generated::0krl9rqVNH8jm65t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TumeSf9GoC8tw5rG' => 
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
        'as' => 'generated::TumeSf9GoC8tw5rG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aG88aeH5RvSY7rxT' => 
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
        'as' => 'generated::aG88aeH5RvSY7rxT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d6pQyMKYS0GubNJr' => 
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
        'as' => 'generated::d6pQyMKYS0GubNJr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fByJHoFg8e2H5SaB' => 
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
        'as' => 'generated::fByJHoFg8e2H5SaB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N7NcooOUeH0uMMEk' => 
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
        'as' => 'generated::N7NcooOUeH0uMMEk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::s9vSAl0UtoClJW8e' => 
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
        'as' => 'generated::s9vSAl0UtoClJW8e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kczU3OoEnckwsRUG' => 
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
        'as' => 'generated::kczU3OoEnckwsRUG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GUqdF0kv0NOsrcUg' => 
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
        'as' => 'generated::GUqdF0kv0NOsrcUg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jomTGMB7Gz2LPBqC' => 
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
        'as' => 'generated::jomTGMB7Gz2LPBqC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NRAkrW8kgmRY33TM' => 
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
        'as' => 'generated::NRAkrW8kgmRY33TM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CpExqV086JJvmrtA' => 
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
        'as' => 'generated::CpExqV086JJvmrtA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::19oDZUcXD9rAF85U' => 
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
        'as' => 'generated::19oDZUcXD9rAF85U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZPZf1tSN4yJ7ARcj' => 
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
        'as' => 'generated::ZPZf1tSN4yJ7ARcj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QvrAHwi2cAaRSIZc' => 
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
        'as' => 'generated::QvrAHwi2cAaRSIZc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mKz7xwioI6eDflqE' => 
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
        'as' => 'generated::mKz7xwioI6eDflqE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ObAHZE3438zfVn64' => 
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
        'as' => 'generated::ObAHZE3438zfVn64',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::B91jwbNnkGf4JCYE' => 
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
        'as' => 'generated::B91jwbNnkGf4JCYE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Bz0D67g04yoBQdMx' => 
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
        'as' => 'generated::Bz0D67g04yoBQdMx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KAkcp5hvJpKFveVQ' => 
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
        'as' => 'generated::KAkcp5hvJpKFveVQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MN3IEmunWgZHHzwK' => 
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
        'as' => 'generated::MN3IEmunWgZHHzwK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::96APSIS5wlW1W1Z3' => 
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
        'as' => 'generated::96APSIS5wlW1W1Z3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::17nAQF7rBSreRxix' => 
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
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000004ca0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::17nAQF7rBSreRxix',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::yZJCfAtaBmytsIJq' => 
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
        'as' => 'generated::yZJCfAtaBmytsIJq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::CO8ctUYsbGTWV79J' => 
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
        'as' => 'generated::CO8ctUYsbGTWV79J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
    'generated::K8OWSH0Mn5FXeNQR' => 
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
        'as' => 'generated::K8OWSH0Mn5FXeNQR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
