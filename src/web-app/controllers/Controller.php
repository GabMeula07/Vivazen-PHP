<?php

class Controller
{
    protected function verify_post($post, $required)
    {

        $missing = [];

        foreach ($required as $field) {
            if (!isset($post[$field]) || $post[$field] === '') {
                $missing[] = $field;
            }
        }

        if (!empty($missing)) {
            http_response_code(400);
            echo json_encode([
                'error' => true,
                'message' => 'Campos obrigatórios ausentes: ' . implode(', ', $missing),
                'missing_fields' => $missing,
                'code' => 400,
            ]);
            exit;
        }
    }

}