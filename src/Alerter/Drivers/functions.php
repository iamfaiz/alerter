<?php

function render( $filename, $data = array() )
{
    try {
        if( !is_readable($file) ){
            throw new Exception("View $file not found!", 1);
        }

        $content = file_get_contents( $file );

        ob_start() && extract($data, EXTR_SKIP);

        eval('?>'.$content);

        $content = ob_get_clean();

        ob_flush();

        return $content;

    } catch (Exception $e) {
        return $e->getMessage();
    }
}