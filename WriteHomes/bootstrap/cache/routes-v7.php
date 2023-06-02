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
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jh8PslpNBIOaTWxU',
          ),
          1 => NULL,
          2 => 
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
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9vg9WAONz27aqSim',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::5LyC6Fs5A3ADC2Bh',
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
            '_route' => 'generated::qze0QndJwUUv6jxf',
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
      '/login/2fa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login.2fa',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'login.2fa.store',
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
            '_route' => 'password.update',
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
            '_route' => 'generated::RUpB1E5bULwwJmC8',
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
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Tjuxa8CRKA6MWPp6',
          ),
          1 => NULL,
          2 => 
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
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact',
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
      '/terms-and-conditions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'terms',
          ),
          1 => NULL,
          2 => 
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
      '/privacy-policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy',
          ),
          1 => NULL,
          2 => 
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
      '/webhooks/stripe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'stripe.webhook',
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
      '/webhooks/paypal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::klxjtwUeYvAHvnnP',
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
      '/webhooks/paystack' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SJE1mIZB5IG9fJ8A',
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
      '/webhooks/razorpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3DjxD39N4DoFInBN',
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
      '/webhooks/mollie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'mollie.webhook',
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
      '/webhooks/coinbase' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bgWU2hT7CN5cWOXw',
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
      '/install' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install',
          ),
          1 => NULL,
          2 => 
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
      '/install/requirements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.requirements',
          ),
          1 => NULL,
          2 => 
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
      '/install/permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.permissions',
          ),
          1 => NULL,
          2 => 
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
      '/install/database' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.database',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'install.database.store',
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
      '/install/activation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'install.activation',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'install.activation.activate',
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
      '/update/now' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t6a2I7GnApoDywBe',
          ),
          1 => NULL,
          2 => 
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
      '/admin/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.dashboard',
          ),
          1 => NULL,
          2 => 
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
      '/admin/davinci/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.dashboard',
          ),
          1 => NULL,
          2 => 
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
      '/admin/davinci/templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.templates',
          ),
          1 => NULL,
          2 => 
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
      '/admin/davinci/templates/template/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::714DmZUIiyBG3uQn',
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
      '/admin/davinci/templates/template/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x2KuyVHUEGGrIWHf',
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
      '/admin/davinci/templates/template/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LixjBiTwEePk7ZEZ',
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
      '/admin/davinci/templates/template/makepro' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mrNG4VCQd0xE6d1Y',
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
      '/admin/davinci/templates/template/removepro' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lUhldRFEESvU62QK',
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
      '/admin/davinci/templates/template/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::67Djvfpvesy2Ymcm',
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
      '/admin/davinci/templates/activate/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r5XEukodkX1MYYZP',
          ),
          1 => NULL,
          2 => 
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
      '/admin/davinci/templates/deactivate/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GekMBbadYqtMBz2y',
          ),
          1 => NULL,
          2 => 
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
      '/admin/davinci/configs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.configs',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'admin.davinci.configs.store',
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
      '/admin/davinci/custom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.custom',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'admin.davinci.custom.store',
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
      '/admin/davinci/custom/category' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.custom.category',
          ),
          1 => NULL,
          2 => 
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
      '/admin/davinci/custom/category/change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LuA0iF9cSRr6MTGO',
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
      '/admin/davinci/custom/category/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k3YWJTAZnC7f3vrO',
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
      '/admin/davinci/custom/category/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mV02Fd8AhMDcQ2Pn',
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
      '/admin/text-to-speech/voices' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.voices',
          ),
          1 => NULL,
          2 => 
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
      '/admin/text-to-speech/voices/avatar/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UhRJIyMYxAi8BKnt',
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
      '/admin/text-to-speech/voice/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KccGLtbcBJdt6lWa',
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
      '/admin/text-to-speech/voices/voice/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::n5yz0hGvU6nnRmNd',
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
      '/admin/text-to-speech/voices/voice/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jOPoWa2hTRHCEGtk',
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
      '/admin/text-to-speech/voices/activate/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jHLNYgqJcuNMliUh',
          ),
          1 => NULL,
          2 => 
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
      '/admin/text-to-speech/voices/deactivate/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vZlMfCFVMXTpdpBB',
          ),
          1 => NULL,
          2 => 
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
      '/admin/users/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.dashboard',
          ),
          1 => NULL,
          2 => 
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
      '/admin/users/activity' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.activity',
          ),
          1 => NULL,
          2 => 
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
      '/admin/users/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.list',
          ),
          1 => NULL,
          2 => 
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
      '/admin/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.store',
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
      '/admin/users/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.create',
          ),
          1 => NULL,
          2 => 
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
      '/admin/finance/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.dashboard',
          ),
          1 => NULL,
          2 => 
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
      '/admin/finance/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.transactions',
          ),
          1 => NULL,
          2 => 
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
      '/admin/finance/transaction/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LECwBA2hZENYOkMF',
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
      '/admin/finance/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.subscriptions',
          ),
          1 => NULL,
          2 => 
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
      '/admin/finance/subscriptions/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EUkuflVvWwGRPIlI',
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
      '/admin/finance/plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plans',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'admin.finance.plan.store',
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
      '/admin/finance/plan/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plan.create',
          ),
          1 => NULL,
          2 => 
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
      '/admin/finance/prepaid' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.prepaid',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'admin.finance.prepaid.store',
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
      '/admin/finance/prepaid/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.prepaid.create',
          ),
          1 => NULL,
          2 => 
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
      '/admin/finance/promocodes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'admin.finance.promocodes.store',
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
      '/admin/finance/promocodes/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.create',
          ),
          1 => NULL,
          2 => 
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
      '/admin/referral/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.settings',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'admin.referral.settings.store',
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
      '/admin/referral/payouts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.payouts',
          ),
          1 => NULL,
          2 => 
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
      '/admin/referral/top' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.top',
          ),
          1 => NULL,
          2 => 
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
      '/admin/settings/invoice' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.invoice',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'admin.settings.invoice.store',
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
      '/admin/finance/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.settings',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'admin.finance.settings.store',
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
      '/admin/support' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support',
          ),
          1 => NULL,
          2 => 
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
      '/admin/support/response' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.response',
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
      '/admin/support/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CZSj85RQ46XACD3I',
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
      '/admin/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'admin.notifications.store',
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
      '/admin/notifications/sytem' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.system',
          ),
          1 => NULL,
          2 => 
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
      '/admin/notifications/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.create',
          ),
          1 => NULL,
          2 => 
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
      '/admin/notifications/mark-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.markAllRead',
          ),
          1 => NULL,
          2 => 
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
      '/admin/notifications/delete-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.deleteAll',
          ),
          1 => NULL,
          2 => 
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
      '/admin/notifications/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wWRb6NKpthao47Tc',
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
      '/admin/settings/global' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.global',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'admin.settings.global.store',
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
      '/admin/settings/backup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.backup',
          ),
          1 => NULL,
          2 => 
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
      '/admin/settings/backup/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.backup.create',
          ),
          1 => NULL,
          2 => 
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
      '/admin/settings/smtp/test' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.smtp.test',
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
      '/admin/settings/smtp' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.smtp',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'admin.settings.smtp.store',
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
      '/admin/settings/registration' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.registration',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'admin.settings.registration.store',
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
      '/admin/settings/oauth' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.oauth',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'admin.settings.oauth.store',
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
      '/admin/settings/activation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.activation',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'admin.settings.activation.store',
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
      '/admin/settings/activation/remove' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.activation.remove',
          ),
          1 => NULL,
          2 => 
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
      '/admin/settings/activation/destroy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.activation.destroy',
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
      '/admin/settings/activation/manual' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.activation.manual',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'admin.settings.activation.manual.store',
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
      '/admin/settings/appearance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.appearance',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'admin.settings.appearance.store',
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
      '/admin/settings/frontend' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.frontend',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'admin.settings.frontend.store',
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
      '/admin/settings/blog' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.blog',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'admin.settings.blog.store',
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
      '/admin/settings/blog/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.blog.create',
          ),
          1 => NULL,
          2 => 
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
      '/admin/settings/blog/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bIynrxvsUfgy7dzi',
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
      '/admin/settings/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.faq',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'admin.settings.faq.store',
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
      '/admin/settings/faq/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.faq.create',
          ),
          1 => NULL,
          2 => 
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
      '/admin/settings/faq/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jjGunaPCgp8Di0Ps',
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
      '/admin/settings/review' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.review',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'admin.settings.review.store',
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
      '/admin/settings/review/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.review.create',
          ),
          1 => NULL,
          2 => 
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
      '/admin/settings/review/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pGJk0zJYcfhCCGLZ',
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
      '/admin/settings/adsense' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.adsense',
          ),
          1 => NULL,
          2 => 
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
      '/admin/settings/terms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.terms',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'admin.settings.terms.store',
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
      '/admin/settings/upgrade' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.upgrade',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'admin.settings.upgrade.start',
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
      '/admin/settings/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.clear',
          ),
          1 => NULL,
          2 => 
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
      '/admin/settings/clear/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.clear.cache',
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
      '/admin/settings/clear/symlink' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.clear.symlink',
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
      '/user/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.dashboard',
          ),
          1 => NULL,
          2 => 
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
      '/user/dashboard/favorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IPBFAq94FWrZf3fA',
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
      '/user/dashboard/favoritecustom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mPqYZAyFxIa6DAb6',
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
      '/user/templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.templates',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tnkdeNVKblXJB7fg',
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
      '/user/templates/custom-template/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GAhcun0uCt3LQ1NQ',
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
      '/user/templates/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vZbua1locUaHjIU0',
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
      '/user/templates/favorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KTYDmSiHOJs3RIAg',
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
      '/user/templates/favoritecustom' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MrvtjVP44SlUVjjG',
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
      '/user/templates/custom-template/favorite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wBRNVj0omy30UMYs',
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
      '/user/templates/article-generator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TvE4YmG4lj56byHr',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/paragraph-generator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ljVWfScU15Dcbfyd',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/pros-and-cons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2ECGeGW1bPCS2aUT',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/talking-points' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PE9nedPpRacrk9Ph',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/summarize-text' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vZdKi02B5VVf68vZ',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/product-description' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gPEIUt0142oxcVWk',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/startup-name-generator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5hsCGKl48tcSToS8',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/product-name-generator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CsEd76YGIkuReVK9',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/meta-description' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nLbed0I5JEBdpIZo',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/faqs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UheyAPxI7YnIIDO3',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/faq-answers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JBU8S71L2YL9S6L8',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/testimonials' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X3qrqgnueUnHz74e',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/blog-titles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0kHlpQaiST25iGzz',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/blog-section' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L3Rc19x2zg3Ayp9E',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/blog-ideas' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HHPjFZCPKlr6ufUj',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/blog-intros' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UUazRbyKxHWNyaCf',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/blog-conclusion' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::imMrmeTx8KKs6kIN',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/content-rewriter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::54WPpBOwUQE5Sc76',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/facebook-ads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KcxBDhlenpQwK4JA',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/video-descriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vXCov4ZDAHgiroh5',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/video-titles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::m62RfU2k5YL371gx',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/youtube-tags-generator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QtBEGNSnAHmN9MYJ',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/instagram-captions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3D95C1ulTNjQClGV',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/instagram-hashtags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::egMSDajfbu4nV9NM',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/social-post-personal' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qWJ00LrSzVzuimJO',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/social-post-business' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IJZSOyizLXqRw2KZ',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/facebook-headlines' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r6usSIlbQuJHPLy7',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/google-headlines' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JRX80wXhE3BYeQKi',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/google-ads' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tYKCd3B6s8YavlIW',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/problem-agitate-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZzVywKsJflDTx8O1',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/academic-essay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0quBzen200Qx4Tma',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/email-welcome' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JWuJOOUQeo7XcQF6',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/email-cold' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yazLSDEyaRKduaMt',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/email-follow-up' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Sl9CKueNERT3HVt0',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/creative-stories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i6NmBic3kSxGvVJm',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/grammar-checker' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QnVdh0zSbMoUUBef',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/cv-generator' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b4sVZMkE8pWsCHBQ',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/cover-letter' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z3WqOr1ikni1vED5',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/2nd-grader' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CC978gLCuwV6Grwz',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/video-scripts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fUC1U7etKCCudtCc',
          ),
          1 => NULL,
          2 => 
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
      '/user/templates/amazon-product' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dCrsIuqe6TnOdrlI',
          ),
          1 => NULL,
          2 => 
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
      '/user/images' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.images',
          ),
          1 => NULL,
          2 => 
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
      '/user/images/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::klibGhSz5SmpU0tW',
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
      '/user/images/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CMuEha5OC2tql0tl',
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
      '/user/images/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ggGawSXiO5NCF7h7',
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
      '/user/code' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.codex',
          ),
          1 => NULL,
          2 => 
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
      '/user/code/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XBpBVcM2lRp2JT0b',
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
      '/user/code/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0vzdAYSbOKc6SWLs',
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
      '/user/code/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Cp2iQvHeMHfo7Czb',
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
      '/user/code/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fAnifIcAQUKlHokD',
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
      '/user/chat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.chat',
          ),
          1 => NULL,
          2 => 
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
      '/user/chat/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZLlLnzwA9gxQVFIQ',
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
      '/user/chat/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6OobjROJL0uvYLYN',
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
      '/user/chat/generate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mhfVb6dEKxA0N21O',
          ),
          1 => NULL,
          2 => 
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
      '/user/chat/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cp3hrrCrapTyjozD',
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
      '/user/chat/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kYaLBjpvrBHtcGGj',
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
      '/user/chat/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e10WhTANV3F3FGmu',
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
      '/user/speech-to-text' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.transcribe',
          ),
          1 => NULL,
          2 => 
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
      '/user/speech-to-text/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aloc3O25Polphfol',
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
      '/user/speech-to-text/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::REjqEC3rIWxwA70G',
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
      '/user/speech-to-text/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tIOJCum9z8nzF7m2',
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
      '/user/speech-to-text/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dznV99rbVrn08VIk',
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
      '/user/text-to-speech' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.voiceover',
          ),
          1 => NULL,
          2 => 
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
      '/user/text-to-speech/synthesize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.voiceover.synthesize',
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
      '/user/text-to-speech/listen' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.voiceover.listen',
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
      '/user/text-to-speech/listen-row' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l5Xx8ENAdgt9Qoj8',
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
      '/user/text-to-speech/audio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7gNgWA94mUIVUlio',
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
      '/user/text-to-speech/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DF0B0YVxOGz8dxK4',
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
      '/user/text-to-speech/config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gVNwy5H9ISwp39Lg',
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
      '/user/document' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::oY9IzmY1tLeLZ20O',
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
      '/user/document/images' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.images',
          ),
          1 => NULL,
          2 => 
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
      '/user/document/codes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.codes',
          ),
          1 => NULL,
          2 => 
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
      '/user/document/voiceovers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.voiceovers',
          ),
          1 => NULL,
          2 => 
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
      '/user/document/transcripts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.transcripts',
          ),
          1 => NULL,
          2 => 
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
      '/user/document/result/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::48ahDvaCX6MN2xME',
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
      '/user/document/result/code/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::S7ofLGyrINQ3XIT8',
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
      '/user/document/result/voiceover/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Eos72tiaItkhzb7d',
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
      '/user/document/result/transcript/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SLTJQkB5HOlnHuml',
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
      '/user/workbook' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.workbooks',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'generated::YNCNqoKRt8YNdpXP',
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
            '_route' => 'user.workbooks.update',
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
        3 => 
        array (
          0 => 
          array (
            '_route' => 'user.workbooks.delete',
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
      '/user/workbook/result/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cfQhlNShJSqvTMUn',
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
      '/user/workbook/change' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.workbooks.change',
          ),
          1 => NULL,
          2 => 
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
      '/user/profile/security' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.security',
          ),
          1 => NULL,
          2 => 
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
      '/user/profile/security/2fa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.security.2fa',
          ),
          1 => NULL,
          2 => 
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
      '/user/profile/security/2fa/activate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.security.2fa.activate',
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
      '/user/profile/security/2fa/deactivate' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.security.2fa.deactivate',
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
      '/user/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile',
          ),
          1 => NULL,
          2 => 
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
      '/user/profile/edit/defaults' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.defaults',
          ),
          1 => NULL,
          2 => 
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
      '/user/profile/edit/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.delete',
          ),
          1 => NULL,
          2 => 
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
      '/user/purchases/subscriptions/cancel' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pnVo36ARaUICo5wD',
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
      '/user/purchases' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.purchases',
          ),
          1 => NULL,
          2 => 
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
      '/user/purchases/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.purchases.subscriptions',
          ),
          1 => NULL,
          2 => 
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
      '/user/pricing/plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.plans',
          ),
          1 => NULL,
          2 => 
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
      '/user/pricing/plan/one-time' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.prepaid.checkout',
          ),
          1 => NULL,
          2 => 
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
      '/user/payments/approved/razorpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.approved.razorpay',
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
      '/user/payments/success/braintree' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.approved.braintree',
          ),
          1 => NULL,
          2 => 
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
      '/user/payments/approved' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.approved',
          ),
          1 => NULL,
          2 => 
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
      '/user/payments/cancelled' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.cancelled',
          ),
          1 => NULL,
          2 => 
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
      '/user/payments/subscription/razorpay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.subscription.razorpay',
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
      '/user/payments/subscription/approved' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.subscription.approved',
          ),
          1 => NULL,
          2 => 
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
      '/user/payments/subscription/cancelled' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.subscription.cancelled',
          ),
          1 => NULL,
          2 => 
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
      '/user/referral' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral',
          ),
          1 => NULL,
          2 => 
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
      '/user/referral/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.store',
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
      '/user/referral/gateway' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.gateway',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'user.referral.gateway.store',
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
      '/user/referral/payouts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.payout',
          ),
          1 => NULL,
          2 => 
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
      '/user/referral/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.email',
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
      '/user/referral/payouts/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.payout.create',
          ),
          1 => NULL,
          2 => 
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
      '/user/referral/payouts/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.payout.store',
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
      '/user/referral/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.referrals',
          ),
          1 => NULL,
          2 => 
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
      '/user/support' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.support',
          ),
          1 => NULL,
          2 => 
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
            '_route' => 'user.support.store',
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
      '/user/support/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8qpsaPmFhbrrw9yN',
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
      '/user/support/response' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.support.response',
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
      '/user/support/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.support.create',
          ),
          1 => NULL,
          2 => 
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
      '/user/notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.notifications',
          ),
          1 => NULL,
          2 => 
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
      '/user/notification/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cgJB9oB5fgNzGT46',
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
      '/user/notifications/mark-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.notifications.markAllRead',
          ),
          1 => NULL,
          2 => 
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
      '/user/notifications/delete-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.notifications.deleteAll',
          ),
          1 => NULL,
          2 => 
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
      '/user/notifications/mark-as-read' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.notifications.mark',
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
      '/user/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'search',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
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
      0 => '{^(?|/reset\\-password/([^/]++)(*:32)|/verify\\-email/([^/]++)/([^/]++)(*:71)|/a(?|uth/(?|redirect/([^/]++)(*:107)|callback/([^/]++)(*:132))|dmin/(?|davinci/custom/([^/]++)/(?|show(*:180)|update(*:194))|users/(?|([^/]++)(?|/(?|show(*:231)|edit(*:243)|credit(*:257)|increase(*:273)|update(*:287))|(*:296))|delete(*:311))|finance/(?|transaction/([^/]++)/(?|update(*:361)|show(*:373)|edit(*:385))|p(?|lan/(?|([^/]++)(?|/(?|show(*:424)|edit(*:436))|(*:445))|delete(*:460))|r(?|epaid/(?|([^/]++)(?|/(?|show(*:501)|edit(*:513))|(*:522))|delete(*:537))|omocodes/([^/]++)(?|/(?|show(*:574)|edit(*:586))|(*:595)))))|referral/(?|([^/]++)/show(*:632)|payouts/([^/]++)/(?|s(?|how(*:667)|tore(*:679))|cancel(*:694)|decline(*:709)))|s(?|upport/([^/]++)/show(*:743)|ettings/(?|b(?|ackup/([^/]++)(?|(*:783)|/delete(*:798))|logs/([^/]++)(?|(*:823)|/edit(*:836)))|faqs/([^/]++)(?|(*:862)|/edit(*:875))|reviews/([^/]++)(?|(*:903)|/edit(*:916))|adsense/([^/]++)(?|(*:944)|/edit(*:957))))|notifications/(?|([^/]++)/show(*:998)|system/([^/]++)/show(*:1026))))|/blog/([^/]++)(*:1052)|/locale/([^/]++)(*:1077)|/user/(?|su(?|bscription/stop/([^/]++)(*:1124)|pport/([^/]++)/show(*:1152))|te(?|mplates/custom\\-template/([^/]++)(*:1200)|xt\\-to\\-speech/([^/]++)/show(*:1237))|document/result/(?|([^/]++)/show(*:1279)|code/([^/]++)/show(*:1306)|voiceover/([^/]++)/show(*:1338)|transcript/([^/]++)/show(*:1371))|workbook/result/([^/]++)/show(*:1410)|p(?|r(?|ofile/(?|security/password/([^/]++)(*:1462)|([^/]++)(*:1479)|project(*:1495)|edit(?|(*:1511)|/delete/([^/]++)(*:1536))|update/defaults/([^/]++)(*:1570))|icing/plan/subscription/([^/]++)(*:1612))|urchases/show/([^/]++)(*:1644)|ayments/(?|pay/(?|([^/]++)(*:1679)|one\\-time/([^/]++)/([^/]++)(*:1715)|promocode/(?|prepaid/([^/]++)(*:1753)|subscription/([^/]++)(*:1783)))|invoice/([^/]++)/(?|generate(*:1822)|show(*:1835)|transfer(*:1852))))|referral/payouts/([^/]++)/(?|show(*:1897)|cancel(*:1912)|decline(*:1928))|notification/([^/]++)/show(*:1964)))/?$}sDu',
    ),
    3 => 
    array (
      32 => 
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
      ),
      71 => 
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
      107 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hXMoD36WNTYGKtmP',
          ),
          1 => 
          array (
            0 => 'driver',
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
      132 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qzV9ExM4K0ktPXe6',
          ),
          1 => 
          array (
            0 => 'driver',
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
      180 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.custom.show',
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
          5 => false,
          6 => NULL,
        ),
      ),
      194 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.davinci.custom.update',
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
          5 => false,
          6 => NULL,
        ),
      ),
      231 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.show',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
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
      243 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.edit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
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
      257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.credit',
          ),
          1 => 
          array (
            0 => 'user',
          ),
          2 => 
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
      273 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.increase',
          ),
          1 => 
          array (
            0 => 'user',
          ),
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
      287 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.update',
          ),
          1 => 
          array (
            0 => 'user',
          ),
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
      296 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.user.change',
          ),
          1 => 
          array (
            0 => 'user',
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
      311 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZMrSyPzW4gSYFaiG',
          ),
          1 => 
          array (
          ),
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
      361 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.transaction.update',
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
          5 => false,
          6 => NULL,
        ),
      ),
      373 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.transaction.show',
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
          5 => false,
          6 => NULL,
        ),
      ),
      385 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.transaction.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      424 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plan.show',
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
          5 => false,
          6 => NULL,
        ),
      ),
      436 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plan.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      445 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.plan.update',
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
      460 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AmVALQv1jwHA6KJA',
          ),
          1 => 
          array (
          ),
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
      501 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.prepaid.show',
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
          5 => false,
          6 => NULL,
        ),
      ),
      513 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.prepaid.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      522 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.prepaid.update',
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
      537 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Fm9JhNQ0bCTd0193',
          ),
          1 => 
          array (
          ),
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
      574 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.show',
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
          5 => false,
          6 => NULL,
        ),
      ),
      586 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      595 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.update',
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
          0 => 
          array (
            '_route' => 'admin.finance.promocodes.destroy',
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
            '_route' => 'admin.finance.promocodes.delete',
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
      632 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.show',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
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
      667 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.payouts.show',
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
          5 => false,
          6 => NULL,
        ),
      ),
      679 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.payouts.update',
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
          5 => false,
          6 => NULL,
        ),
      ),
      694 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.payouts.cancel',
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
          5 => false,
          6 => NULL,
        ),
      ),
      709 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.referral.payouts.decline',
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
          5 => false,
          6 => NULL,
        ),
      ),
      743 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.support.show',
          ),
          1 => 
          array (
            0 => 'ticket_id',
          ),
          2 => 
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
      783 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.backup.download',
          ),
          1 => 
          array (
            0 => 'file_name',
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
      798 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.backup.delete',
          ),
          1 => 
          array (
            0 => 'file_name',
          ),
          2 => 
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
      823 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.blog.update',
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
      836 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.blog.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      862 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.faq.update',
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
      875 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.faq.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      903 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.review.update',
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
      916 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.review.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      944 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.adsense.update',
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
      957 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.settings.adsense.edit',
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
          5 => false,
          6 => NULL,
        ),
      ),
      998 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.show',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1026 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'admin.notifications.systemShow',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1052 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'blogs.show',
          ),
          1 => 
          array (
            0 => 'slug',
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
      1077 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'locale',
          ),
          1 => 
          array (
            0 => 'lang',
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
      1124 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FmEswCLW8TrFpp9o',
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
      1152 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.support.show',
          ),
          1 => 
          array (
            0 => 'ticket_id',
          ),
          2 => 
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
      1200 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VGlCeXfj419Bq6p4',
          ),
          1 => 
          array (
            0 => 'code',
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
      1237 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.voiceover.show',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1279 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.show',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1306 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.code.show',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1338 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.voiceover.show',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1371 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.documents.transcript.show',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1410 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.workbooks.show',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1462 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.security.password',
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
      1479 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.update',
          ),
          1 => 
          array (
            0 => 'user',
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
      1495 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.project',
          ),
          1 => 
          array (
          ),
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
      1511 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.edit',
          ),
          1 => 
          array (
          ),
          2 => 
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
      1536 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.delete.account',
          ),
          1 => 
          array (
            0 => 'user',
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
      1570 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.profile.update.defaults',
          ),
          1 => 
          array (
            0 => 'user',
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
      1612 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.plan.subscribe',
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
      1644 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.purchases.show',
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
      1679 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.pay',
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
      1715 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.pay.prepaid',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'id',
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
      1753 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.promocodes.prepaid',
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
      1783 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.promocodes.subscription',
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
      1822 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.invoice',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
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
      1835 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.invoice.show',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1852 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.payments.invoice.transfer',
          ),
          1 => 
          array (
            0 => 'order_id',
          ),
          2 => 
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
      1897 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.payout.show',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1912 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.payout.cancel',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1928 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.referral.payout.decline',
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
          5 => false,
          6 => NULL,
        ),
      ),
      1964 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'user.notifications.show',
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
          5 => false,
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
    'generated::jh8PslpNBIOaTWxU' => 
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
        'as' => 'generated::jh8PslpNBIOaTWxU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
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
    'generated::9vg9WAONz27aqSim' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:295:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:77:"function (\\Illuminate\\Http\\Request $request) {
    return $request->user();
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000000005a10000000000000000";}";s:4:"hash";s:44:"sp3987RqscJumrtvwwdr9SkGtu2UDZ9UZKwotX53C0o=";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9vg9WAONz27aqSim',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
          'middleware' => 'PreventBackHistory',
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
    'generated::5LyC6Fs5A3ADC2Bh' => 
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
          'middleware' => 'PreventBackHistory',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisteredUserController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::5LyC6Fs5A3ADC2Bh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
          'middleware' => 'PreventBackHistory',
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
    'generated::qze0QndJwUUv6jxf' => 
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
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qze0QndJwUUv6jxf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.2fa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login/2fa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@twoFactorAuthentication',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@twoFactorAuthentication',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login.2fa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login.2fa.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login/2fa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@twoFactorAuthenticationStore',
        'controller' => 'App\\Http\\Controllers\\Auth\\AuthenticatedSessionController@twoFactorAuthenticationStore',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login.2fa.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
          'middleware' => 'PreventBackHistory',
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
          'middleware' => 'PreventBackHistory',
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
          'middleware' => 'PreventBackHistory',
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
    'password.update' => 
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
          'middleware' => 'PreventBackHistory',
          1 => 'guest',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@store',
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
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Auth\\EmailVerificationPromptController@__invoke',
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
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
          2 => 'signed',
          3 => 'throttle:6,1',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController@__invoke',
        'controller' => 'App\\Http\\Controllers\\Auth\\VerifyEmailController@__invoke',
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
          'middleware' => 'PreventBackHistory',
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
          'middleware' => 'PreventBackHistory',
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
    'generated::RUpB1E5bULwwJmC8' => 
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
          'middleware' => 'PreventBackHistory',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmablePasswordController@store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::RUpB1E5bULwwJmC8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
          'middleware' => 'PreventBackHistory',
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
    'generated::hXMoD36WNTYGKtmP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/redirect/{driver}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\SocialAuthController@redirectToProvider',
        'controller' => 'App\\Http\\Controllers\\Auth\\SocialAuthController@redirectToProvider',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hXMoD36WNTYGKtmP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qzV9ExM4K0ktPXe6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/callback/{driver}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          'middleware' => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\SocialAuthController@handleProviderCallback',
        'controller' => 'App\\Http\\Controllers\\Auth\\SocialAuthController@handleProviderCallback',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qzV9ExM4K0ktPXe6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Tjuxa8CRKA6MWPp6' => 
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
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Tjuxa8CRKA6MWPp6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'blogs.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'blog/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@blogShow',
        'controller' => 'App\\Http\\Controllers\\HomeController@blogShow',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'blogs.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@contact',
        'controller' => 'App\\Http\\Controllers\\HomeController@contact',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'terms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'terms-and-conditions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@termsAndConditions',
        'controller' => 'App\\Http\\Controllers\\HomeController@termsAndConditions',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'terms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'privacy-policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@privacyPolicy',
        'controller' => 'App\\Http\\Controllers\\HomeController@privacyPolicy',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'privacy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'stripe.webhook' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/stripe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\StripeWebhookController@handleStripe',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\StripeWebhookController@handleStripe',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'stripe.webhook',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::klxjtwUeYvAHvnnP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/paypal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\PaypalWebhookController@handlePaypal',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\PaypalWebhookController@handlePaypal',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::klxjtwUeYvAHvnnP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SJE1mIZB5IG9fJ8A' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/paystack',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\PaystackWebhookController@handlePaystack',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\PaystackWebhookController@handlePaystack',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::SJE1mIZB5IG9fJ8A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3DjxD39N4DoFInBN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/razorpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\RazorpayWebhookController@handleRazorpay',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\RazorpayWebhookController@handleRazorpay',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3DjxD39N4DoFInBN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'mollie.webhook' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/mollie',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\MollieWebhookController@handleMollie',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\MollieWebhookController@handleMollie',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'mollie.webhook',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bgWU2hT7CN5cWOXw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'webhooks/coinbase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Webhooks\\CoinbaseWebhookController@handleCoinbase',
        'controller' => 'App\\Http\\Controllers\\Admin\\Webhooks\\CoinbaseWebhookController@handleCoinbase',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::bgWU2hT7CN5cWOXw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@index',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.requirements' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/requirements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@requirements',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@requirements',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.requirements',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.permissions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@permissions',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@permissions',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.permissions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.database' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@database',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@database',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.database',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.database.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@storeDatabaseCredentials',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@storeDatabaseCredentials',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.database.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.activation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/activation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@activation',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@activation',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.activation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'install.activation.activate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/activation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InstallController@activateApplication',
        'controller' => 'App\\Http\\Controllers\\Admin\\InstallController@activateApplication',
        'namespace' => NULL,
        'prefix' => '/install',
        'where' => 
        array (
        ),
        'as' => 'install.activation.activate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'locale' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'locale/{lang}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\LocaleController@language',
        'controller' => 'App\\Http\\Controllers\\LocaleController@language',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'locale',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::t6a2I7GnApoDywBe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update/now',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UpdateController@updateDatabase',
        'controller' => 'App\\Http\\Controllers\\Admin\\UpdateController@updateDatabase',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::t6a2I7GnApoDywBe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.templates' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templates',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templates',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.templates',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::714DmZUIiyBG3uQn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/templates/template/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@descriptionUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@descriptionUpdate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::714DmZUIiyBG3uQn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::x2KuyVHUEGGrIWHf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/templates/template/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateActivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateActivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::x2KuyVHUEGGrIWHf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LixjBiTwEePk7ZEZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/templates/template/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateDeactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateDeactivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::LixjBiTwEePk7ZEZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mrNG4VCQd0xE6d1Y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/templates/template/makepro',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@assignProPackage',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@assignProPackage',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::mrNG4VCQd0xE6d1Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lUhldRFEESvU62QK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/templates/template/removepro',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@removeProPackage',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@removeProPackage',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::lUhldRFEESvU62QK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::67Djvfpvesy2Ymcm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/templates/template/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@deleteTemplate',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@deleteTemplate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::67Djvfpvesy2Ymcm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r5XEukodkX1MYYZP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/templates/activate/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateActivateAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateActivateAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::r5XEukodkX1MYYZP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GekMBbadYqtMBz2y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/templates/deactivate/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateDeactivateAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminDavinciController@templateDeactivateAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::GekMBbadYqtMBz2y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.configs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/configs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.configs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.configs.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/configs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\DavinciConfigController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.configs.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.custom' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/custom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.custom',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.custom.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/custom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.custom.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.custom.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/custom/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.custom.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.custom.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/davinci/custom/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.custom.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.custom.category' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/davinci/custom/category',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@category',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@category',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.custom.category',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LuA0iF9cSRr6MTGO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/custom/category/change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@change',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@change',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::LuA0iF9cSRr6MTGO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::k3YWJTAZnC7f3vrO' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/custom/category/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::k3YWJTAZnC7f3vrO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mV02Fd8AhMDcQ2Pn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/davinci/custom/category/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\CustomTemplateController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::mV02Fd8AhMDcQ2Pn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.davinci.voices' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/text-to-speech/voices',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voices',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voices',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.davinci.voices',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UhRJIyMYxAi8BKnt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/text-to-speech/voices/avatar/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@changeAvatar',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@changeAvatar',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::UhRJIyMYxAi8BKnt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KccGLtbcBJdt6lWa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/text-to-speech/voice/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceUpdate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::KccGLtbcBJdt6lWa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::n5yz0hGvU6nnRmNd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/text-to-speech/voices/voice/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceActivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceActivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::n5yz0hGvU6nnRmNd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jOPoWa2hTRHCEGtk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/text-to-speech/voices/voice/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceDeactivate',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voiceDeactivate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::jOPoWa2hTRHCEGtk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jHLNYgqJcuNMliUh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/text-to-speech/voices/activate/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voicesActivateAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voicesActivateAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::jHLNYgqJcuNMliUh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vZlMfCFVMXTpdpBB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/text-to-speech/voices/deactivate/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voicesDeactivateAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\VoiceCustomizationController@voicesDeactivateAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::vZlMfCFVMXTpdpBB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.activity' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/activity',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@activity',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@activity',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.activity',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@listUsers',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@listUsers',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.list',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{user}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{user}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.credit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/users/{user}/credit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@credit',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@credit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.credit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.increase' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/{user}/increase',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@increase',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@increase',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.increase',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/users/{user}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.user.change' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/users/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@change',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@change',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.user.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZMrSyPzW4gSYFaiG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/users/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\AdminUserController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\AdminUserController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ZMrSyPzW4gSYFaiG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.transactions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@listTransactions',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@listTransactions',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.transactions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.transaction.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/finance/transaction/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.transaction.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.transaction.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/transaction/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.transaction.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.transaction.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/transaction/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.transaction.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LECwBA2hZENYOkMF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/transaction/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::LECwBA2hZENYOkMF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.subscriptions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceController@listSubscriptions',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceController@listSubscriptions',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.subscriptions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EUkuflVvWwGRPIlI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/subscriptions/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@stopSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@stopSubscription',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::EUkuflVvWwGRPIlI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plans' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plans',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plan.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plan.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plan.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/plan/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plan.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plan.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/plan/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plan.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plan.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/plan/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plan.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.plan.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/finance/plan/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.plan.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AmVALQv1jwHA6KJA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/plan/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSubscriptionPlanController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::AmVALQv1jwHA6KJA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/prepaid',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/prepaid',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/prepaid/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/prepaid/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/prepaid/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.prepaid.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/finance/prepaid/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.prepaid.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Fm9JhNQ0bCTd0193' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/prepaid/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePrepaidPlanController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Fm9JhNQ0bCTd0193',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/promocodes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/promocodes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/promocodes/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/promocodes/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/promocodes/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/finance/promocodes/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/finance/promocodes/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.promocodes.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/promocodes/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinancePromocodeController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.promocodes.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/referral/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.settings.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/{order_id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@paymentShow',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@paymentShow',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.payouts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/payouts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payouts',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payouts',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.payouts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.payouts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/payouts/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsShow',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsShow',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.payouts.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.payouts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/referral/payouts/{id}/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsUpdate',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsUpdate',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.payouts.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.payouts.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/payouts/{id}/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsCancel',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsCancel',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.payouts.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.payouts.decline' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/referral/payouts/{id}/decline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsDecline',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@payoutsDecline',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.payouts.decline',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.referral.top' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/referral/top',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@topReferrers',
        'controller' => 'App\\Http\\Controllers\\Admin\\ReferralSystemController@topReferrers',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.referral.top',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InvoiceController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\InvoiceController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.invoice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.invoice.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/invoice',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\InvoiceController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\InvoiceController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.invoice.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/finance/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSettingController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSettingController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.finance.settings.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/finance/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\FinanceSettingController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\FinanceSettingController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.finance.settings.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.support',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/support/{ticket_id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.support.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.support.response' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/support/response',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportController@response',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportController@response',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.support.response',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CZSj85RQ46XACD3I' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/support/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\SupportController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\SupportController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::CZSj85RQ46XACD3I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.system' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/sytem',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@system',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@system',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.system',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@show',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@show',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.systemShow' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/system/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@systemShow',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@systemShow',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.systemShow',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.markAllRead' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/mark-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@markAllRead',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@markAllRead',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.markAllRead',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.notifications.deleteAll' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/notifications/delete-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@deleteAll',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@deleteAll',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.notifications.deleteAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wWRb6NKpthao47Tc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/notifications/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\NotificationController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\NotificationController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::wWRb6NKpthao47Tc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.global' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/global',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\GlobalController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\GlobalController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.global',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.global.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/global',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\GlobalController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\GlobalController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.global.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.backup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/backup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.backup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.backup.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/backup/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.backup.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.backup.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/backup/{file_name}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@download',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@download',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.backup.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.backup.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/backup/{file_name}/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\BackupController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.backup.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.smtp.test' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/smtp/test',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@test',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@test',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.smtp.test',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.smtp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/smtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.smtp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.smtp.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/smtp',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\SMTPController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.smtp.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.registration' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/registration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\RegistrationController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\RegistrationController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.registration',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.registration.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/registration',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\RegistrationController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\RegistrationController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.registration.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.oauth' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/oauth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\OAuthController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\OAuthController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.oauth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.oauth.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/oauth',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\OAuthController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\OAuthController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.oauth.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.activation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/activation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.activation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.activation.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/activation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.activation.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.activation.remove' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/activation/remove',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@remove',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@remove',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.activation.remove',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.activation.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'admin/settings/activation/destroy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@destroy',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.activation.destroy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.activation.manual' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/activation/manual',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@showManualActivation',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@showManualActivation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.activation.manual',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.activation.manual.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/activation/manual',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@storeManualActivation',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ActivationController@storeManualActivation',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.activation.manual.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.appearance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/appearance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\AppearanceController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\AppearanceController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.appearance',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.appearance.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/appearance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\AppearanceController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\AppearanceController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.appearance.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.frontend' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/frontend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.frontend',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.frontend.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/frontend',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FrontendController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.frontend.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.blog' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.blog',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.blog.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/blog/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.blog.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.blog.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/blog',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.blog.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.blog.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/blogs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.blog.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.blog.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/blogs/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.blog.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bIynrxvsUfgy7dzi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/blog/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\BlogController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::bIynrxvsUfgy7dzi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.faq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.faq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.faq.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/faq/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.faq.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.faq.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.faq.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.faq.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/faqs/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.faq.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.faq.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/faqs/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.faq.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jjGunaPCgp8Di0Ps' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/faq/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\FAQController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::jjGunaPCgp8Di0Ps',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.review' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.review',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.review.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/review/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@create',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@create',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.review.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.review.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/review',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.review.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.review.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/reviews/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.review.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.review.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/reviews/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.review.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pGJk0zJYcfhCCGLZ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/review/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@delete',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\ReviewController@delete',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::pGJk0zJYcfhCCGLZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.adsense' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/adsense',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.adsense',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.adsense.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'admin/settings/adsense/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@update',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@update',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.adsense.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.adsense.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/adsense/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@edit',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\AdsenseController@edit',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.adsense.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.terms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.terms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.terms.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@store',
        'controller' => 'App\\Http\\Controllers\\Admin\\Frontend\\PageController@store',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.terms.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.upgrade' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/upgrade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\UpgradeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\UpgradeController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.upgrade',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.upgrade.start' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/upgrade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\UpgradeController@upgrade',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\UpgradeController@upgrade',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.upgrade.start',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.clear' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/settings/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@index',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.clear',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.clear.cache' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/clear/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@cache',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@cache',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.clear.cache',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'admin.settings.clear.symlink' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/settings/clear/symlink',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:admin',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@symlink',
        'controller' => 'App\\Http\\Controllers\\Admin\\Settings\\ClearCacheController@symlink',
        'namespace' => NULL,
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'admin.settings.clear.symlink',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserDashboardController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserDashboardController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IPBFAq94FWrZf3fA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/dashboard/favorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserDashboardController@favorite',
        'controller' => 'App\\Http\\Controllers\\User\\UserDashboardController@favorite',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::IPBFAq94FWrZf3fA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mPqYZAyFxIa6DAb6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/dashboard/favoritecustom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserDashboardController@favoriteCustom',
        'controller' => 'App\\Http\\Controllers\\User\\UserDashboardController@favoriteCustom',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::mPqYZAyFxIa6DAb6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FmEswCLW8TrFpp9o' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/subscription/stop/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@stopSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@stopSubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::FmEswCLW8TrFpp9o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.templates' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@index',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.templates',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tnkdeNVKblXJB7fg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@process',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::tnkdeNVKblXJB7fg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GAhcun0uCt3LQ1NQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/custom-template/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@processCustom',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@processCustom',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::GAhcun0uCt3LQ1NQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vZbua1locUaHjIU0' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@save',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@save',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::vZbua1locUaHjIU0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KTYDmSiHOJs3RIAg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/favorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@favorite',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@favorite',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::KTYDmSiHOJs3RIAg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MrvtjVP44SlUVjjG' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/favoritecustom',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@favoriteCustom',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@favoriteCustom',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::MrvtjVP44SlUVjjG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wBRNVj0omy30UMYs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/templates/custom-template/favorite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@favoriteCustom',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@favoriteCustom',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::wBRNVj0omy30UMYs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TvE4YmG4lj56byHr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/article-generator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewArticleGenerator',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewArticleGenerator',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::TvE4YmG4lj56byHr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ljVWfScU15Dcbfyd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/paragraph-generator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewParagraphGenerator',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewParagraphGenerator',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ljVWfScU15Dcbfyd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2ECGeGW1bPCS2aUT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/pros-and-cons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewProsAndCons',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewProsAndCons',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::2ECGeGW1bPCS2aUT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PE9nedPpRacrk9Ph' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/talking-points',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewTalkingPoints',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewTalkingPoints',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::PE9nedPpRacrk9Ph',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vZdKi02B5VVf68vZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/summarize-text',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewSummarizeText',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewSummarizeText',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::vZdKi02B5VVf68vZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gPEIUt0142oxcVWk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/product-description',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewProductDescription',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewProductDescription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::gPEIUt0142oxcVWk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5hsCGKl48tcSToS8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/startup-name-generator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewStartupNameGenerator',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewStartupNameGenerator',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::5hsCGKl48tcSToS8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CsEd76YGIkuReVK9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/product-name-generator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewProductNameGenerator',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewProductNameGenerator',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::CsEd76YGIkuReVK9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nLbed0I5JEBdpIZo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/meta-description',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewMetaDescription',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewMetaDescription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::nLbed0I5JEBdpIZo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UheyAPxI7YnIIDO3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/faqs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewFAQs',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewFAQs',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::UheyAPxI7YnIIDO3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JBU8S71L2YL9S6L8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/faq-answers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewFAQAnswers',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewFAQAnswers',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::JBU8S71L2YL9S6L8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X3qrqgnueUnHz74e' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/testimonials',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewTestimonials',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewTestimonials',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::X3qrqgnueUnHz74e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0kHlpQaiST25iGzz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/blog-titles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewBlogTitles',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewBlogTitles',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::0kHlpQaiST25iGzz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::L3Rc19x2zg3Ayp9E' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/blog-section',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewBlogSection',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewBlogSection',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::L3Rc19x2zg3Ayp9E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HHPjFZCPKlr6ufUj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/blog-ideas',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewBlogIdeas',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewBlogIdeas',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::HHPjFZCPKlr6ufUj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UUazRbyKxHWNyaCf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/blog-intros',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewBlogIntros',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewBlogIntros',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::UUazRbyKxHWNyaCf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::imMrmeTx8KKs6kIN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/blog-conclusion',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewBlogConclusion',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewBlogConclusion',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::imMrmeTx8KKs6kIN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::54WPpBOwUQE5Sc76' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/content-rewriter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewContentRewriter',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewContentRewriter',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::54WPpBOwUQE5Sc76',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KcxBDhlenpQwK4JA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/facebook-ads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewFacebookAds',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewFacebookAds',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::KcxBDhlenpQwK4JA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vXCov4ZDAHgiroh5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/video-descriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewVideoDescriptions',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewVideoDescriptions',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::vXCov4ZDAHgiroh5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::m62RfU2k5YL371gx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/video-titles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewVideoTitles',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewVideoTitles',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::m62RfU2k5YL371gx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QtBEGNSnAHmN9MYJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/youtube-tags-generator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewYoutubeTagsGenerator',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewYoutubeTagsGenerator',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::QtBEGNSnAHmN9MYJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3D95C1ulTNjQClGV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/instagram-captions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewInstagramCaptions',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewInstagramCaptions',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::3D95C1ulTNjQClGV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::egMSDajfbu4nV9NM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/instagram-hashtags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewInstagramHashtagsGenerator',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewInstagramHashtagsGenerator',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::egMSDajfbu4nV9NM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qWJ00LrSzVzuimJO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/social-post-personal',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewSocialPostPersonal',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewSocialPostPersonal',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::qWJ00LrSzVzuimJO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IJZSOyizLXqRw2KZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/social-post-business',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewSocialPostBusiness',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewSocialPostBusiness',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::IJZSOyizLXqRw2KZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::r6usSIlbQuJHPLy7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/facebook-headlines',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewFacebookHeadlines',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewFacebookHeadlines',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::r6usSIlbQuJHPLy7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JRX80wXhE3BYeQKi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/google-headlines',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewGoogleAdsHeadlines',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewGoogleAdsHeadlines',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::JRX80wXhE3BYeQKi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tYKCd3B6s8YavlIW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/google-ads',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewGoogleAdsDescription',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewGoogleAdsDescription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::tYKCd3B6s8YavlIW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZzVywKsJflDTx8O1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/problem-agitate-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewPAS',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewPAS',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ZzVywKsJflDTx8O1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0quBzen200Qx4Tma' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/academic-essay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewAcademicEssay',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewAcademicEssay',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::0quBzen200Qx4Tma',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JWuJOOUQeo7XcQF6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/email-welcome',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewWelcomeEmail',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewWelcomeEmail',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::JWuJOOUQeo7XcQF6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yazLSDEyaRKduaMt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/email-cold',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewColdEmail',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewColdEmail',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::yazLSDEyaRKduaMt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Sl9CKueNERT3HVt0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/email-follow-up',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewFollowUpEmail',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewFollowUpEmail',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Sl9CKueNERT3HVt0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i6NmBic3kSxGvVJm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/creative-stories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewCreativeStories',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewCreativeStories',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::i6NmBic3kSxGvVJm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QnVdh0zSbMoUUBef' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/grammar-checker',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewGrammarChecker',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewGrammarChecker',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::QnVdh0zSbMoUUBef',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b4sVZMkE8pWsCHBQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/cv-generator',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewCVGenerator',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewCVGenerator',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::b4sVZMkE8pWsCHBQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z3WqOr1ikni1vED5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/cover-letter',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewCoverLetter',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewCoverLetter',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Z3WqOr1ikni1vED5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CC978gLCuwV6Grwz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/2nd-grader',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewSummarize2ndGrader',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewSummarize2ndGrader',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::CC978gLCuwV6Grwz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fUC1U7etKCCudtCc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/video-scripts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewVideoScripts',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewVideoScripts',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::fUC1U7etKCCudtCc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dCrsIuqe6TnOdrlI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/amazon-product',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewAmazonProduct',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewAmazonProduct',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::dCrsIuqe6TnOdrlI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VGlCeXfj419Bq6p4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/templates/custom-template/{code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TemplateController@viewCustomTemplate',
        'controller' => 'App\\Http\\Controllers\\User\\TemplateController@viewCustomTemplate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::VGlCeXfj419Bq6p4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.images' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/images',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ImageController@index',
        'controller' => 'App\\Http\\Controllers\\User\\ImageController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.images',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::klibGhSz5SmpU0tW' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/images/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ImageController@process',
        'controller' => 'App\\Http\\Controllers\\User\\ImageController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::klibGhSz5SmpU0tW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CMuEha5OC2tql0tl' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/images/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ImageController@view',
        'controller' => 'App\\Http\\Controllers\\User\\ImageController@view',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::CMuEha5OC2tql0tl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ggGawSXiO5NCF7h7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/images/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ImageController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\ImageController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ggGawSXiO5NCF7h7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.codex' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/code',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CodeController@index',
        'controller' => 'App\\Http\\Controllers\\User\\CodeController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.codex',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XBpBVcM2lRp2JT0b' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/code/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CodeController@process',
        'controller' => 'App\\Http\\Controllers\\User\\CodeController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::XBpBVcM2lRp2JT0b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0vzdAYSbOKc6SWLs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/code/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CodeController@save',
        'controller' => 'App\\Http\\Controllers\\User\\CodeController@save',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::0vzdAYSbOKc6SWLs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Cp2iQvHeMHfo7Czb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/code/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CodeController@view',
        'controller' => 'App\\Http\\Controllers\\User\\CodeController@view',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Cp2iQvHeMHfo7Czb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fAnifIcAQUKlHokD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/code/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\CodeController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\CodeController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::fAnifIcAQUKlHokD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.chat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/chat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@index',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.chat',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZLlLnzwA9gxQVFIQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@process',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::ZLlLnzwA9gxQVFIQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6OobjROJL0uvYLYN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@clear',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@clear',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::6OobjROJL0uvYLYN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mhfVb6dEKxA0N21O' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/chat/generate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@generateChat',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@generateChat',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::mhfVb6dEKxA0N21O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cp3hrrCrapTyjozD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@save',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@save',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::cp3hrrCrapTyjozD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kYaLBjpvrBHtcGGj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@view',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@view',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::kYaLBjpvrBHtcGGj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::e10WhTANV3F3FGmu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/chat/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ChatController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\ChatController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::e10WhTANV3F3FGmu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.transcribe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/speech-to-text',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TranscribeController@index',
        'controller' => 'App\\Http\\Controllers\\User\\TranscribeController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.transcribe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aloc3O25Polphfol' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/speech-to-text/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TranscribeController@process',
        'controller' => 'App\\Http\\Controllers\\User\\TranscribeController@process',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::aloc3O25Polphfol',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::REjqEC3rIWxwA70G' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/speech-to-text/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TranscribeController@save',
        'controller' => 'App\\Http\\Controllers\\User\\TranscribeController@save',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::REjqEC3rIWxwA70G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tIOJCum9z8nzF7m2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/speech-to-text/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TranscribeController@view',
        'controller' => 'App\\Http\\Controllers\\User\\TranscribeController@view',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::tIOJCum9z8nzF7m2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dznV99rbVrn08VIk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/speech-to-text/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\TranscribeController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\TranscribeController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::dznV99rbVrn08VIk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.voiceover' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/text-to-speech',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@index',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.voiceover',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.voiceover.synthesize' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/synthesize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@synthesize',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@synthesize',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.voiceover.synthesize',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.voiceover.listen' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/listen',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@listen',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@listen',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.voiceover.listen',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l5Xx8ENAdgt9Qoj8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/listen-row',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@listenRow',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@listenRow',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::l5Xx8ENAdgt9Qoj8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.voiceover.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/text-to-speech/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@show',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.voiceover.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7gNgWA94mUIVUlio' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/audio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@audio',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@audio',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::7gNgWA94mUIVUlio',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DF0B0YVxOGz8dxK4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::DF0B0YVxOGz8dxK4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gVNwy5H9ISwp39Lg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/text-to-speech/config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\VoiceoverController@config',
        'controller' => 'App\\Http\\Controllers\\User\\VoiceoverController@config',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::gVNwy5H9ISwp39Lg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@index',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oY9IzmY1tLeLZ20O' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/document',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@store',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::oY9IzmY1tLeLZ20O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.images' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/images',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@images',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@images',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.images',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.codes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/codes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@codes',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@codes',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.codes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.voiceovers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/voiceovers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@voiceovers',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@voiceovers',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.voiceovers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.transcripts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/transcripts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@transcripts',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@transcripts',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.transcripts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::48ahDvaCX6MN2xME' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/document/result/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::48ahDvaCX6MN2xME',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::S7ofLGyrINQ3XIT8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/document/result/code/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@deleteCode',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@deleteCode',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::S7ofLGyrINQ3XIT8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Eos72tiaItkhzb7d' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/document/result/voiceover/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@deleteVoiceover',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@deleteVoiceover',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::Eos72tiaItkhzb7d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SLTJQkB5HOlnHuml' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/document/result/transcript/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@deleteTranscript',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@deleteTranscript',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::SLTJQkB5HOlnHuml',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/result/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@show',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.code.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/result/code/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@showCode',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@showCode',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.code.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.voiceover.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/result/voiceover/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@showVoiceover',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@showVoiceover',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.voiceover.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.documents.transcript.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/document/result/transcript/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\DocumentController@showTranscript',
        'controller' => 'App\\Http\\Controllers\\User\\DocumentController@showTranscript',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.documents.transcript.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.workbooks' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/workbook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@index',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.workbooks',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YNCNqoKRt8YNdpXP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/workbook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@store',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::YNCNqoKRt8YNdpXP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cfQhlNShJSqvTMUn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/workbook/result/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::cfQhlNShJSqvTMUn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.workbooks.change' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/workbook/change',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@change',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@change',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.workbooks.change',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.workbooks.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/workbook/result/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@show',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.workbooks.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.workbooks.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/workbook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@update',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.workbooks.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.workbooks.delete' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/workbook',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\WorkbookController@destroy',
        'controller' => 'App\\Http\\Controllers\\User\\WorkbookController@destroy',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.workbooks.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.security' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/security',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserPasswordController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserPasswordController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.security',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.security.password' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/security/password/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserPasswordController@update',
        'controller' => 'App\\Http\\Controllers\\User\\UserPasswordController@update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.security.password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.security.2fa' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/security/2fa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserPasswordController@google',
        'controller' => 'App\\Http\\Controllers\\User\\UserPasswordController@google',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.security.2fa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.security.2fa.activate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/security/2fa/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserPasswordController@activate2FA',
        'controller' => 'App\\Http\\Controllers\\User\\UserPasswordController@activate2FA',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.security.2fa.activate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.security.2fa.deactivate' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/security/2fa/deactivate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserPasswordController@deactivate2FA',
        'controller' => 'App\\Http\\Controllers\\User\\UserPasswordController@deactivate2FA',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.security.2fa.deactivate',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/profile/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@update',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@update',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.project' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/project',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@updateProject',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@updateProject',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.project',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@edit',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@edit',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.edit',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.defaults' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/edit/defaults',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@editDefaults',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@editDefaults',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.defaults',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.delete' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/profile/edit/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@showDelete',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@showDelete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.delete',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.delete.account' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/profile/edit/delete/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@accountDelete',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@accountDelete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.delete.account',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.profile.update.defaults' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'user/profile/update/defaults/{user}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserController@updateDefaults',
        'controller' => 'App\\Http\\Controllers\\User\\UserController@updateDefaults',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.profile.update.defaults',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pnVo36ARaUICo5wD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/purchases/subscriptions/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@stopSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@stopSubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::pnVo36ARaUICo5wD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.purchases' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/purchases',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@index',
        'controller' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.purchases',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.purchases.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/purchases/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@show',
        'controller' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.purchases.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.purchases.subscriptions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/purchases/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@subscriptions',
        'controller' => 'App\\Http\\Controllers\\User\\PurchaseHistoryController@subscriptions',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.purchases.subscriptions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.plans' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/pricing/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PlanController@index',
        'controller' => 'App\\Http\\Controllers\\User\\PlanController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.plans',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.plan.subscribe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/pricing/plan/subscription/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
          5 => 'unsubscribed',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PlanController@subscribe',
        'controller' => 'App\\Http\\Controllers\\User\\PlanController@subscribe',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.plan.subscribe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.prepaid.checkout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/pricing/plan/one-time',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PlanController@checkout',
        'controller' => 'App\\Http\\Controllers\\User\\PlanController@checkout',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.prepaid.checkout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.pay' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/pay/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
          5 => 'unsubscribed',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@pay',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@pay',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.pay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.pay.prepaid' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/pay/one-time/{type}/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@payPrePaid',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@payPrePaid',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.pay.prepaid',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.approved.razorpay' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/approved/razorpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@approvedRazorpayPrepaid',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@approvedRazorpayPrepaid',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.approved.razorpay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.approved.braintree' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/success/braintree',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@braintreeSuccess',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@braintreeSuccess',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.approved.braintree',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.approved' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/approved',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@approved',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@approved',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.approved',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.cancelled' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/cancelled',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@cancelled',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@cancelled',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.cancelled',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.subscription.razorpay' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/subscription/razorpay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@approvedRazorpaySubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@approvedRazorpaySubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.subscription.razorpay',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.subscription.approved' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/subscription/approved',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@approvedSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@approvedSubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.subscription.approved',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.subscription.cancelled' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/subscription/cancelled',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
          5 => 'unsubscribed',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@cancelledSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@cancelledSubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.subscription.cancelled',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.promocodes.prepaid' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/pay/promocode/prepaid/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PromocodeController@applyPromocodesPrepaid',
        'controller' => 'App\\Http\\Controllers\\User\\PromocodeController@applyPromocodesPrepaid',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.promocodes.prepaid',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.promocodes.subscription' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/payments/pay/promocode/subscription/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PromocodeController@applyPromocodesSubscription',
        'controller' => 'App\\Http\\Controllers\\User\\PromocodeController@applyPromocodesSubscription',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.promocodes.subscription',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@index',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/referral/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@store',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.gateway' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral/gateway',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@gateway',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@gateway',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.gateway',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.gateway.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/referral/gateway',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@gatewayStore',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@gatewayStore',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.gateway.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.payout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral/payouts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@payouts',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@payouts',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.payout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/referral/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@email',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@email',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.payout.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral/payouts/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsCreate',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsCreate',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.payout.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.payout.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/referral/payouts/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsStore',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsStore',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.payout.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.referrals' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@referrals',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@referrals',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.referrals',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.payout.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral/payouts/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsShow',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsShow',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.payout.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.payout.cancel' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/referral/payouts/{id}/cancel',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsCancel',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsCancel',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.payout.cancel',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.referral.payout.decline' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'user/referral/payouts/{id}/decline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsDecline',
        'controller' => 'App\\Http\\Controllers\\User\\ReferralController@payoutsDecline',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.referral.payout.decline',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.invoice' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/invoice/{order_id}/generate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@generatePaymentInvoice',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@generatePaymentInvoice',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.invoice',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.invoice.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/invoice/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@showPaymentInvoice',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@showPaymentInvoice',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.invoice.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.payments.invoice.transfer' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/payments/invoice/{order_id}/transfer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\PaymentController@bankTransferPaymentInvoice',
        'controller' => 'App\\Http\\Controllers\\User\\PaymentController@bankTransferPaymentInvoice',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.payments.invoice.transfer',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.support' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.support',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.support.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@store',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@store',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.support.store',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8qpsaPmFhbrrw9yN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/support/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::8qpsaPmFhbrrw9yN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.support.response' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/support/response',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@response',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@response',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.support.response',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.support.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/support/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@create',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@create',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.support.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.support.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/support/{ticket_id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserSupportController@show',
        'controller' => 'App\\Http\\Controllers\\User\\UserSupportController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.support.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.notifications' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@index',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.notifications',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.notifications.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/notification/{id}/show',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@show',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@show',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.notifications.show',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cgJB9oB5fgNzGT46' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/notification/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@delete',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@delete',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'generated::cgJB9oB5fgNzGT46',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.notifications.markAllRead' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/notifications/mark-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@markAllRead',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@markAllRead',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.notifications.markAllRead',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.notifications.deleteAll' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'user/notifications/delete-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@deleteAll',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@deleteAll',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.notifications.deleteAll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'user.notifications.mark' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'user/notifications/mark-as-read',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\UserNotificationController@markNotification',
        'controller' => 'App\\Http\\Controllers\\User\\UserNotificationController@markNotification',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'user.notifications.mark',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'search' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'user/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'verified',
          2 => '2fa.verify',
          3 => 'role:user|admin|subscriber',
          4 => 'PreventBackHistory',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\SearchController@index',
        'controller' => 'App\\Http\\Controllers\\User\\SearchController@index',
        'namespace' => NULL,
        'prefix' => '/user',
        'where' => 
        array (
        ),
        'as' => 'search',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
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
