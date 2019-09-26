<?php

namespace InnerServe\PdnsPhpApi\Service;

use Symfony\Component\HttpFoundation\JsonResponse;

class JsonResponseService {
	/**
	 * @param $data
	 *
	 * @return JsonResponse
	 */
	public function ok( $data ) {
		$response = new JsonResponse();

		return $response->setData( array( 'success' => true, 'error' => null, 'data' => $data ) );
	}

	/**
	 * @param      $error
	 * @param null $data
	 *
	 * @return JsonResponse
	 */
	public function error( $error, $data = null ) {
		$response = new JsonResponse();

		return $response->setData( array( 'success' => false, 'error' => $error, 'data' => $data ) );
	}
}