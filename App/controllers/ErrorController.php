<?php

namespace App\Controllers;

class ErrorController 
{
  /**
   * 404 Not found
   *
   * @return void
   */
  public static function notFound($message = 'Resource not found')
  {
    http_response_code(404);

    loadView('error', [
      'status' => '404',
      'message' => $message
    ]);
  }

  /**
   * 403 Not authorized
   *
   * @return void
   */
  public static function notAuthorized($message = 'You are not authorized to view this resource')
  {
    http_response_code(403);

    loadView('error', [
      'status' => '403',
      'message' => $message
    ]);
  }
}