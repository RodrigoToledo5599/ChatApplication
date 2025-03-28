<?php

namespace App\Enum;

enum ErrorMessages: string {
    case SenhaEOuEmailNulo = "Preencha todos os campos";
    case AuthenticationError = "Credenciais erradas";
    case SessionExpiradaOuNaoExistente = "Sessão expirada ou não existente";
}
