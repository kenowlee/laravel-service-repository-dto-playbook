
# Visão geral

Este playbook mostra uma arquitetura pragmática em **PHP 8.2** (estilo Laravel 11/12).

## Objetivos
- Controller fino (apenas HTTP boundary)
- Regras de negócio no Service
- Persistência no Repository
- DTO como fronteira de entrada (tipado + normalização)
- Erros previsíveis (httpcode + code + message + details)

## Fluxo base
Controller -> Request -> DTO -> Service -> Repository -> Resource

## Regras curtas
- Controller não contém regra de negócio
- Service não retorna JSON/Response
- Repository não conhece HTTP
- DTO não acessa banco nem integrações
- Exceções esperadas usam `ApiException + ErrorCode`