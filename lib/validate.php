<?php
function sanitize_text(string $value): string
{
    return trim(htmlspecialchars($value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'));
}

function sanitize_email(string $value): string
{
    return filter_var(trim($value), FILTER_SANITIZE_EMAIL);
}

function validate_email(string $value): bool
{
    return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
}
