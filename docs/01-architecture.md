
# Arquitetura

## Camadas
### Controller (HTTP boundary)
- recebe request
- valida (FormRequest)
- cria DTO
- chama Service
- retorna Resource/Response

### DTO (fronteira de entrada)
- converte array em tipos (inclui Enums)
- normaliza (trim, lowercase)
- define defaults

### Service (caso de uso)
- orquestra regras de negócio
- chama repositories e clients
- lança exceções previsíveis

### Repository (persistência)
- encapsula Eloquent/Query Builder
- centraliza queries
- trata constraints esperadas com exceções padronizadas

### Resource (saída)
- formata saída
- evita vazar estrutura interna

## Erros padronizados
```json
{
  "success": false,
  "httpcode": 422,
  "code": "USR_001",
  "message": "Mensagem legível",
  "details": {}
}
```