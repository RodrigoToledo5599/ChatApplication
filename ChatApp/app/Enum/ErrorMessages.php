<?php

namespace App\Enum;

enum ErrorMessages: string {
    case TokenCouldNotBeCreated = "Token could not be created";
    case SenhaEOuEmailNulo = "Preencha todos os campos";
    case AuthenticationError = "Credenciais erradas";
    case SessionExpiradaOuTokenNaoExistente = "Sessão expirada ou Token não existente";
}
