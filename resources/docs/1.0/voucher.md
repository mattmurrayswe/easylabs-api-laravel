# Voucher

---

- [Criar Voucher](#create-voucher)
- [Listar Voucher por ID](#list-voucher-id)
- [Listar Vouchers](#list-voucher)
- [Excluir Voucher](#delete-voucher)
- [Editar Voucher](#edit-voucher)
- [Usar Voucher](#use-voucher)

> {success} Todas as requisições abaixo fazem o uso do **Bearer Token**, como forma de segurança. Portanto, no header de cada requisição é necessário utilizar o **token** que fora retornado na hora do login.

### Parâmetros do header:

- **Authorization**  _token_: Bearer Token.


<a name="create-voucher"></a>
## Criar Voucher

Método http e caminho: 

> {primary} POST {{url('/')}}/api/prescriber/voucher

### Parâmetros do body:
- **code**  _String_: Código **ÚNICO** do novo Voucher.
- **engagement_action**  _String_: Ação de engajamento.
- **engagement_action_agent**  _String_: Agente Ação de engajamento.
- **description**  _String_: Descrição do Voucher.
- **expiration**  _Date_: Expiração do Voucher ( Y-m-d ).
- **discount**  _Double_: Desconto do Voucher (XX.XX)
- **quantity**  _Integer_: Quantidade de usos do voucher
- **is_first_box**  _Boolean_: Definidir como primeira caixa
- **is_active**  _Boolean_: Definir voucher como ativo
- **prescriber_id**  _Integer_: ID do prescritor que esta criando o voucher
- **cpf**  _Integer_: Criar um voucher com usos especificos para esse CPF

```json
{
    "code":"CODETESTE2",
    "engagement_action":"Voucher teste",
    "engagement_action_agent":"Voucher teste",
    "description":"Voucher teste",
    "expiration":"2023-07-26",
    "discount":50.50,
    "quantity":20,
    "is_first_box":1,
    "is_active":1,
    "prescriber_id":6
}
```


### Respostas

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": "Voucher cadastrado com sucesso"
    }
}
```


<a name="list-voucher-id"></a>
## Listar Voucher por ID

Método http e caminho: 

> {primary} GET {{url('/')}}/api/prescriber/voucher/**{ID_DO_VOUCHER}**

Por ex: 3.

> {primary} GET {{url('/')}}/api/prescriber/voucher/**3**

### Respostas

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": {
            "id": 3,
            "code": "CODETESTE2",
            "engagement_action": "Voucher teste",
            "engagement_action_agent": "Voucher teste",
            "description": "Voucher teste",
            "expiration": "2023-07-26",
            "discount": "50.50",
            "quantity": 20,
            "is_first_box": 1,
            "is_active": 1,
            "created_at": "2023-07-08T20:52:48.000000Z",
            "updated_at": "2023-07-08T20:52:48.000000Z",
            "deleted_at": null,
            "uses": null,
            "cpf": null,
            "prescriber_id": 6
        }
    }
}
```


<a name="list-voucher"></a>
## Listar Todos os Voucher

Método http e caminho: 

> {primary} GET {{url('/')}}/api/prescriber/voucher

### Respostas

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": [
            {
                "id": 2,
                "code": "CODETESTE",
                "engagement_action": "Voucher teste",
                "engagement_action_agent": "Voucher teste",
                "description": "Voucher teste",
                "expiration": "2023-07-27",
                "discount": "50.50",
                "quantity": 20,
                "is_first_box": 1,
                "is_active": 1,
                "created_at": "2023-07-03T02:47:37.000000Z",
                "updated_at": "2023-07-08T20:43:27.000000Z",
                "deleted_at": null,
                "uses": 2,
                "cpf": "12345678911",
                "prescriber_id": 6
            },
            {
                "id": 3,
                "code": "CODETESTE2",
                "engagement_action": "Voucher teste",
                "engagement_action_agent": "Voucher teste",
                "description": "Voucher teste",
                "expiration": "2023-07-26",
                "discount": "50.50",
                "quantity": 20,
                "is_first_box": 1,
                "is_active": 1,
                "created_at": "2023-07-08T20:52:48.000000Z",
                "updated_at": "2023-07-08T20:52:48.000000Z",
                "deleted_at": null,
                "uses": null,
                "cpf": null,
                "prescriber_id": 6
            },
            {
                "id": 5,
                "code": "CODETESTE3",
                "engagement_action": "Voucher teste",
                "engagement_action_agent": "Voucher teste",
                "description": "Voucher teste",
                "expiration": "2023-07-26",
                "discount": "50.50",
                "quantity": 20,
                "is_first_box": 1,
                "is_active": 1,
                "created_at": "2023-07-08T20:53:34.000000Z",
                "updated_at": "2023-07-08T20:53:34.000000Z",
                "deleted_at": null,
                "uses": null,
                "cpf": "07259356936",
                "prescriber_id": 6
            }
        ]
    }
}
```

<a name="delete-voucher"></a>
## Deletar Voucher

Método http e caminho: 

> {primary} DELETE {{url('/')}}/api/prescriber/voucher/**{ID_DO_VOUCHER}**

Por ex: 3.

> {primary} DELETE {{url('/')}}/api/prescriber/voucher/**3**


### Respostas

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": "Voucher deletado com sucesso"
    }
}
```
<a name="edit-voucher"></a>
## Editar Voucher

Método http e caminho: 

> {primary} PUT {{url('/')}}/api/prescriber/voucher/**{ID_DO_VOUCHER}**

Por ex: 2.

> {primary} PUT {{url('/')}}/api/prescriber/voucher/**3**


### Parâmetros do body:
- **code**  _String_: Código **ÚNICO** do novo Voucher.
- **engagement_action**  _String_: Ação de engajamento.
- **engagement_action_agent**  _String_: Agente Ação de engajamento.
- **description**  _String_: Descrição do Voucher.
- **expiration**  _Date_: Expiração do Voucher ( Y-m-d ).
- **discount**  _Double_: Desconto do Voucher (XX.XX)
- **quantity**  _Integer_: Quantidade de usos do voucher
- **is_first_box**  _Boolean_: Definidir como primeira caixa
- **is_active**  _Boolean_: Definir voucher como ativo
- **prescriber_id**  _Integer_: ID do prescritor que esta criando o voucher
- **cpf**  _Integer_: Criar um voucher com usos especificos para esse CPF

### Exemplo de payload da requisição

```json
{
    "code":"aaa",
    "engagement_action":"Voucher teste",
    "engagement_action_agent":"Voucher teste",
    "description":"Voucher teste",
    "expiration":"2023-07-26",
    "discount":50.50,
    "quantity":20,
    "is_first_box":1,
    "is_active":1,
    "prescriber_id":6
}
```

### Respostas

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": "Voucher editado com sucesso"
    }
}
```


<a name="use-voucher"></a>
## Informar Uso de Voucher

Método http e caminho: 

> {primary} POST {{url('/')}}/api/patient/use-voucher

### Parâmetros do body:

- **voucher_voce**  _String_: Codigo de um vocuher valido.
- **prescriber_id**  _Int_: ID válido de um prescritor.
- **patient_id**  _Int_: ID válido de um paciente.

### Exemplo de payload da requisição

```json
{
    "voucher_code":"CODETESTE",
    "patient_id":27,
    "prescriber_id":6
}
```

### Respostas

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": {
            "id": 2,
            "code": "CODETESTE",
            "engagement_action": "Voucher teste",
            "engagement_action_agent": "Voucher teste",
            "description": "Voucher teste",
            "expiration": "2023-07-27",
            "discount": "50.50",
            "quantity": 20,
            "is_first_box": 1,
            "is_active": 1,
            "created_at": "2023-07-03T02:47:37.000000Z",
            "updated_at": "2023-07-08T20:43:27.000000Z",
            "deleted_at": null,
            "uses": 2,
            "cpf": "12345678911",
            "prescriber_id": 6
        }
    }
}
```
#### Status: 422 Error - Unprocessable Content

```json
{
    "error": {
        "message": "Voucher nao encontrado"
    }
}
```
#### Status: 422 Error - Unprocessable Content

```json
{
    "error": {
        "message": "Voucher Expirado"
    }
}
```
#### Status: 422 Error - Unprocessable Content

```json
{
    "error": {
        "message": "Voucher sem usos restantes"
    }
}
```
#### Status: 422 Error - Unprocessable Content

```json
{
    "error": {
        "message": "Paciente nao pode usar este voucher. Voucher fora disponibilizado para um CPF distinto do paciente."
    }
}
```

