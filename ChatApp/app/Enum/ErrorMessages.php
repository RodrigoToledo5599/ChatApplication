<?php

namespace App\Enum;

enum ErrorMessages: string {
    case TokenCouldNotBeCreated = "Token could not be created";
    case SenhaEOuEmailNulo = "Preencha todos os campos";
    case AuthenticationError = "Credenciais erradas";
    case SessionExpiradaOuNaoExistente = "Sessão expirada ou não existente";
}
