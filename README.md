![PHP](https://img.shields.io/badge/PHP-8.2-blue) ![Laravel Style](https://img.shields.io/badge/Laravel-11%2F12-orange) ![Architecture](https://img.shields.io/badge/Architecture-Service%20Layer%20%2B%20Repository-success) ![DTO](https://img.shields.io/badge/Pattern-DTO-informational)

# Laravel Backend Playbook (PHP 8.2 | Laravel 11/12 style)

Este repositório documenta e demonstra uma arquitetura pragmática para backends em **PHP 8.2** e estilo **Laravel 11/12**:

- **Service Layer + Repository**
- **DTOs** como fronteira de entrada
- **Enums** de domínio
- **Erros padronizados** (HTTP + code + message + details)
- (Capítulos seguintes) OAuth client_credentials com cache de token, Jobs/Scheduler, Logs auditáveis

## Conteúdo
- Docs: `/docs` (comece por `docs/index.md`)
- Exemplos: `/examples`

## Fluxo (Create User)
`Controller -> Request -> DTO -> Service -> Repository -> Resource`

## Formato de erro padrão
```json
{
  "success": false,
  "httpcode": 422,
  "code": "USR_001",
  "message": "Email already registered.",
  "details": {}
}
```

## Roadmap (semanas)
- [x] Semana 0: base + fluxo + padrão de erros
- [ ] Semana 1: docs Service/Repository/DTO (PT-BR)
- [ ] Semana 2: Enums + Erros padronizados (PT-BR) + refino do código
- [ ] Semana 3: OAuth client_credentials + cache de token (PT-BR)
- [ ] Semana 4: Jobs/Scheduler + Logs auditáveis (PT-BR)

> Observação: o código em `/examples` é intencionalmente pequeno e focado em arquitetura (não é um app Laravel rodável).