<?php
function format_cpf($string) {
    return substr($string, 0, 3) . '.' . substr($string, 3, 3) .
    '.' . substr($string, 6, 3) . '-' . substr($string, 9, 2);
}