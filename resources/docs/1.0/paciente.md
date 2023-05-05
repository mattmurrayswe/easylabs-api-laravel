# Autenticação e Cadastro

---

- [Retornar Informações do Paciente](#retornar-pacient-infos)
- [Editar Informações do Paciente](#editar-pacient-infos)
- [Informar Uso de Medicação](#informar-uso-medicacao)
- [Desativar Conta](#desativar)
- [Deletar Conta](#deletar)
- [Atualizar Configurações de conta](#atualizar-configuracao-de-conta)

> {success} Todas as requisições abaixo fazem o uso do **Bearer Token**, como forma de segurança. Portanto, no header de cada requisição é necessário utilizar o **token** que fora retornado na hora do login.

### Parâmetros do header:

- **Authorization**  _token_: Bearer Token.


<a name="retornar-pacient-infos"></a>
## Retornar Informações do Paciente

Método http e caminho: 

> {primary} GET {{url('/')}}/api/patient/patient-info/**{ID_DO_PACIENTE}**

No lugar de **ID_DO_PACIENTE** colocar o ID que fora retornado na hora do login.

Por ex: 28.

> {primary} GET {{url('/')}}/api/patient/patient-info/**28**

### Respostas

#### Status: 200 OK

```json
{
    "data": {
        "id": 28,
        "name": "John Doe",
        "email": "doc@gmail.com",
        "cpf": "13126440107",
        "cellphone": "(11) 55932-4370",
        "active": 1,
        "birth": "1997-12-18",
        "push_notification": false,
        "email_notification": false,
        "remember_medicine": false,
        "treatment_feedback": false
    }
}
```

<a name="editar-pacient-infos"></a>
## Retornar Informações do Paciente

Método http e caminho: 

> {primary} PUT {{url('/')}}/api/patient/patient-info/**{ID_DO_PACIENTE}**

### Parâmetros do body:
- **name**  _String_: ID válido de um tratamento.
- **email**  _String_: Quanto fora utilizado da medicação.
- **password**  _String_: Data de uso da medicação.
- **cpf**  _String_: Hora de uso da medicação.
- **cellphone**  _String_: ID válido de um paciente.
- **birth**  _String_: Tipo da medicação. Ex: Gotas / Comprimidos / etc...

No lugar de **ID_DO_PACIENTE** colocar o ID que fora retornado na hora do login.

Por ex: 28.

> {primary} PUT {{url('/')}}/api/patient/patient-info/**28**

### Respostas

#### Status: 200 OK

```json
{
    "data": {
        "name": "John Doe",
        "email": "johndoe@gmail.com",
        "cpf": "13126440107",
        "cellphone": "(11) 55932-4370",
        "birth": "1997-12-18"
    }
}
```

<a name="informar-uso-medicacao"></a>
## Informar Uso da Medicação

Método http e caminho: 

> {primary} POST {{url('/')}}/api/patient/inform-treatment/

### Parâmetros do body:

- **treatment_id**  _Int_: ID válido de um tratamento.
- **how_many**  _String_: Quanto fora utilizado da medicação.
- **use_date**  _Date_: Data de uso da medicação.
- **use_time**  _Time_: Hora de uso da medicação.
- **patient_id**  _Int_: ID válido de um paciente.
- **unit_type**  _String_: Tipo da medicação. Ex: Gotas / Comprimidos / etc...

### Exemplo de payload da requisição

```json
{
    "treatment_id": 5,
    "how_many": "5",
    "use_date": "1997-12-18",
    "use_time": "05:50",
    "patient_id": 2,
    "unit_type": "teste"
}
```

### Respostas

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": "Uso do remédo feito com sucesso!"
    }
}
```
#### Status: 422 Error - Unprocessable Content

```json
{
    "error": {
        "message": "Tratamento ou paciente nao existentes!"
    }
}
```


<a name="desativar"></a>
## Desativar Conta

Método http e caminho: 

> {primary} POST {{url('/')}}/api/patient/desativate-account/**{ID_DO_PACIENTE}**

Por ex: 28.

> {primary} POST {{url('/')}}/api/patient/desativate-account/**28**



### Respostas

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": "Conta deletada com sucesso."
    }
}
```
<a name="deletar"></a>
## Deletar Conta

Método http e caminho: 

> {primary} POST {{url('/')}}/api/patient/delete-account/**{ID_DO_PACIENTE}**

Por ex: 28.

> {primary} POST {{url('/')}}/api/patient/delete-account/**28**



### Respostas

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": "Patient desativado com sucesso."
    }
}
```


<a name="atualizar-configuracao-de-conta"></a>
## Atualizar Configurações da Conta

Método http e caminho: 

> {primary} POST {{url('/')}}/api/patient/account-config/**{ID_DO_PACIENTE}**

Por ex: 28.

> {primary} POST {{url('/')}}/api/patient/account-config/**28**


### Parâmetros do body:

- **push_notification**  _Boolean_: Controla o envio de PUSH notification esta habilitado.
- **email_notification**  _Boolean_: Controla o envio de EMAIL esta habilitado.
- **remember_medicine**  _Boolean_: Controla o envio de lembrete de medicação.
- **treatment_feedback**  _Boolean_: Controla o envio do feedback de uso do tratamento esta habilitado.

### Exemplo de payload da requisição

```json
{
    "push_notification": true,
    "email_notification": true,
    "remember_medicine": true,
    "treatment_feedback": true
}
```

### Respostas

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": "Configuracoes da conta alteradas com sucesso!."
    }
}
```
