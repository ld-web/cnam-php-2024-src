<?php

require_once __DIR__ . '/../classes/CategoryError.php';

function categoryErrorMessage(int $errorCode): string
{
    return match ($errorCode) {
        CategoryError::NAME_REQUIRED => "Le nom est obligatoire",
        default => "Une erreur est survenue"
    };

    // switch ($errorCode) {
    //     case 1:
    //         $errorMsg = "Le nom est obligatoire";
    //         break;
    //     default:
    //         $errorMsg = "Une erreur est survenue";
    // }

    // return $errorMsg;
}