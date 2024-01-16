<?php

namespace App\Http\Middleware;

use Closure;

class SetAppointmentSource
{
    public function handle($request, Closure $next)
    {
        $request->headers->set('X-Appointment-Source', 'patient');
        return $next($request);
    }
}
