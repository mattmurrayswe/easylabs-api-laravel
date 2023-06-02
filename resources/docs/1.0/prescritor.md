# Autenticação e Cadastro

---

- [Get Prescriber](#get-prescriber)
- [Edit Prescriber](#edit-prescriber)
- [Upload Documents](#upload-docs)
- [Criar um Paciente Usando Prescritor](#criar-paciente)
- [Conectar Paciente com Prescritor](#connect)
- [Desconecetar Paciente com Prescritor pelo ID](#disconect)
- [Ver Pacientes Conectados ao Prescritor Com Tratamento](#pacientes-conectados-ao-prescritor-com-tratamento)
- [Retornar Tratamento do Paciente pelo ID do Paciente](#retornar-tratamento-do-paciente-pelo-id-do-paciente)
- [Editar Tratamento do Paciente pelo ID do Paciente](#editar-tratamento-do-paciente-pelo-id-do-tratamento)
- [Deletar Tratamento do Paciente pelo ID do Paciente](#deletar-tratamento-do-paciente-pelo-id-do-tratamento)

> {success} Todas as requisições abaixo fazem o uso do **Bearer Token**, como forma de segurança. Portanto, no header de cada requisição é necessário utilizar o **token** que fora retornado na hora do login.

### Parâmetros do header:

- **Authorization**  _token_: Bearer Token.


<a name="get-prescriber"></a>
## Lista os dados do Prescriber

Método http e caminho: 

> {primary} GET {{url('/')}}/api/prescriber/prescriber-info/22

### Respostas

#### Status: 200 OK

```json
{
    "data": {
        "name": "Matheus Murray",
        "email": "matheusmurraydev6@gmail.com",
        "cpf": "07862803811",
        "address": {
            "number": "33",
            "street": "Rua da Engenharia de Software",
            "complement": "Bloco 6"
        },
        "documents": "",
        "indicate_clinic": true,
        "cellphone": "11994273409",
        "crm": "CRM/SP 123479.",
        "cnpj": "206061900021211",
        "company_name": "Hospital Geral de Curitiba",
        "active": 1
    }
}
```
#### Status: 422 Unprocessable Content ( A falha do envio do email pode causa esse erro )

```json
{
    "error": {
        "message": "Prescriber não encontrado."
    }
}
```

<a name="edit-prescriber"></a>
## Editar Prescritor

Método http e caminho: 

> {primary} PUT {{url('/')}}/api/prescriber/prescriber-info/22

### Parâmetros do body:

- **name** _string_: O nome do prescriber
- **cpf** _string_: CPF único do prescriber
- **email** _string_: Email único do prescriber
- **cellphone** _string_: Telefone do prescriber
- **crm** _string_: CRM único do prescriber
- **indicate_clinic** _boolean_: true
- **password** _string_: A senha do prescriber
- **cnpj** _string_: Senha do prescriber
- **company_name** _string_: Nome da empresa
- **address** _object_:
- **street** _string_: Rua
- **number** _string_: Número
- **complement** _string_: Complemento

### Exemplo de payload da requisição

```json
{
    "name": "Matheus Murray",
    "cpf": "07862803911",
    "email": "matheusmurraydev4@gmail.com",
    "cellphone": "11994273409",
    "crm": "CRM/SP 123469.",
    "indicate_clinic": true,
    "password": "Senha@123",
    "cnpj": "206061900001211",
    "company_name": "Hospital Geral de Curitiba",
    "address": {
        "street" : "Rua da Engenharia de Software",
        "number" : "33",
        "complement" : "Bloco 6"
    }
}
```

### Respostas

#### Status: 200 OK

```json
{"success":{"message":"Sucesso!","data":"Prescritor editado com sucesso"}}
```

#### Status: 422 Unprocessable Content

```json
{
    "error": {
        "message": {}
    }
}
```

<a name="criar-paciente"></a>
## Criar um Paciente Usando Prescritor

Método http e caminho: 

> {primary} POST {{url('/')}}/api/prescriber/create-patient/

### Parâmetros do body:

- **name**  _String_: Nome do novo paciente
- **email**  _String_: EMAIL, único e válido, do novo paciente.
- **cpf**  _String_: CPF, único e válido, do novo paciente.
- **cellphone**  _String_: Celular, único e válido, do novo paciente.
- **prescriber_id**  _Int_: ID válido do prescritor que esta criando o paciente.
- **birth**  _Date_: Data de nascimento do novo paciente
- **push_notification**  _Boolean_: Controla o envio de PUSH notification esta habilitado.
- **email_notification**  _Boolean_: Controla o envio de EMAIL esta habilitado.
- **remember_medicine**  _Boolean_: Controla o envio de lembrete de medicação.
- **treatment_feedback**  _Boolean_: Controla o envio do feedback de uso do tratamento esta habilitado.

### Exemplo de payload da requisição

> {info} **Atenção** Não é necessário informar uma senha. Essa senha é gerada e enviada ao email do cadastro do novo paciente automaticamente.

```json
{
    "name": "John Doe",
    "email": "testenovocadastro@gmail.com",
    "cpf": "72534184091",
    "cellphone": "(11) 53232-4370",
    "birth": "1997-12-18",
    "push_notification": true,
    "email_notification": true,
    "remember_medicine": true,
    "treatment_feedback": true,
    "prescriber_id": 1
}
```

### Respostas

#### Status: 200 OK

```json
{
    "user": {
        "id": 29,
        "name": "John Doe",
        "email": "testenovocadastro@gmail.com",
        "createdAt": "04-05-2023"
    },
    "token": "113|sXcvnN1eJCsdZR1yptTtiFp9XEZLBv2neFkgU2WS"
}
```
#### Status: 422 Unprocessable Content ( A falha do envio do email pode causa esse erro )

```json
{
    "error": {
        "message": "Nao foi possivel criar o paciente"
    }
}
```

<a name="connect"></a>
## Conectar Paciente com Prescritor

Método http e caminho: 

> {primary} POST {{url('/')}}/api/prescriber/connect-patient/

### Parâmetros do body:


- **prescriber_id**  _Int_: ID válido do prescritor sera conectado ao paciente.
- **patient_id**  _Int_: ID válido do paciente que sera conectado ao prescritor.


### Exemplo de payload da requisição


```json
{
    "patient_id": 2,
    "prescriber_id": 1
}
```

### Respostas

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": "Sucesso!."
    }
}
```

<a name="disconect"></a>
## Desconectar Paciente com Prescritor pelo ID

Método http e caminho: 

> {primary} POST {{url('/')}}/api/prescriber/erase-connected-patient/**{ID_DO_PACIENTE}**

Por ex: 28.

> {primary} POST {{url('/')}}/api/prescriber/erase-connected-patient/**28**


### Respostas

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": "Sucesso!"
    }
}
```


<a name="pacientes-conectados-ao-prescritor-com-tratamento"></a>
##Ver Pacientes Conectados ao Prescritor Com Tratamento

Método http e caminho: 

> {primary} POST {{url('/')}}/api/prescriber/get-prescriber-patient/**{ID_DO_PACIENTE}**

Por ex: 1.

> {primary} POST {{url('/')}}/api/prescriber/get-prescriber-patient/**1**


### Respostas

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": [
            {
                "id": 1,
                "name": "Matheus Murray",
                "email": "matheusmurraydev@gmail.com",
                "cpf": "07862803957",
                "cellphone": "11994273409",
                "crm": "CRM/SP 123456.",
                "cnpj": "20606190000100",
                "company_name": "Hospital Geral de Curitiba",
                "patients": [
                    {
                        "id": 2,
                        "name": "David William",
                        "email": "david.william@gebit.io",
                        "cpf": "11234567890",
                        "cellphone": "61995108282",
                        "birth": "2004-07-18",
                        "active": 1,
                        "treatment": [
                            {
                                "id": 3,
                                "name_diagnosis": "Epilepsia",
                                "name_medicine": "Canabidiol",
                                "name_treatment": "Tratamento contra Epilepsia",
                                "how_many": "3",
                                "frequency": "3x por dia",
                                "presentation": "gramas",
                                "start_treatment_date": "2023-02-21T00:00:00.000000Z",
                                "end_treatment_date": "2023-02-21T00:00:00.000000Z",
                                "use_time": "05:30:00",
                                "posology": null,
                                "packing_quantity": "30 comprimidos",
                                "permanent": null
                            },
                            {
                                "id": 4,
                                "name_diagnosis": "Epilepsia",
                                "name_medicine": "Canabidiol",
                                "name_treatment": "Tratamento contra Epilepsia",
                                "how_many": "3",
                                "frequency": "3x por dia",
                                "presentation": "gramas",
                                "start_treatment_date": "2023-02-21T00:00:00.000000Z",
                                "end_treatment_date": "2023-02-21T00:00:00.000000Z",
                                "use_time": "05:30:00",
                                "posology": null,
                                "packing_quantity": "30 comprimidos",
                                "permanent": 1
                            }
                        ]
                    },
                    {
                        "id": 29,
                        "name": "John Doe",
                        "email": "testenovocadastro@gmail.com",
                        "cpf": "72534184091",
                        "cellphone": "(11) 53232-4370",
                        "birth": "1997-12-18",
                        "active": 1,
                        "treatment": []
                    },
                    {
                        "id": 32,
                        "name": "John Doe",
                        "email": "test1enovocadastro@gmail.com",
                        "cpf": "72532184091",
                        "cellphone": "(11) 53232-4370",
                        "birth": "1997-12-18",
                        "active": 1,
                        "treatment": []
                    },
                    {
                        "id": 34,
                        "name": "John Doe",
                        "email": "test1e1novocadastro@gmail.com",
                        "cpf": "72532185091",
                        "cellphone": "(11) 53232-4370",
                        "birth": "1997-12-18",
                        "active": 1,
                        "treatment": []
                    }
                ]
            }
        ]
    }
}
```

<a name="retornar-tratamento-do-paciente-pelo-id-do-paciente"></a>
##Retornar Tratamento do Paciente pelo ID do Paciente

Método http e caminho: 

> {primary} POST {{url('/')}}/api/prescriber/get-pacient-treatment/**{ID_DO_PACIENTE}**

Por ex: 2.

> {primary} POST {{url('/')}}/api/prescriber/get-pacient-treatment/**2**


### Respostas

#### Status: 200 OK

```json
{
    "id": 2,
    "name": "David William",
    "email": "david.william@gebit.io",
    "cpf": "11234567890",
    "cellphone": "61995108282",
    "birth": "2004-07-18",
    "active": 1,
    "treatments": [
        {
            "id": 3,
            "patient_id": 2,
            "name_diagnosis": "Epilepsia",
            "name_medicine": "Canabidiol",
            "name_treatment": "Tratamento contra Epilepsia",
            "presentation": "gramas",
            "how_many": "3",
            "frequency": "3x por dia",
            "start_treatment_date": "2023-02-21",
            "end_treatment_date": "2023-02-21",
            "created_at": "2023-04-19T10:34:45.000000Z",
            "updated_at": "2023-04-19T10:34:45.000000Z",
            "use_time": "05:30:00",
            "packing_quantity": "30 comprimidos",
            "permanent": null
        },
        {
            "id": 4,
            "patient_id": 2,
            "name_diagnosis": "Epilepsia",
            "name_medicine": "Canabidiol",
            "name_treatment": "Tratamento contra Epilepsia",
            "presentation": "gramas",
            "how_many": "3",
            "frequency": "3x por dia",
            "start_treatment_date": "2023-02-21",
            "end_treatment_date": "2023-02-21",
            "created_at": "2023-04-19T10:40:29.000000Z",
            "updated_at": "2023-04-19T10:40:29.000000Z",
            "use_time": "05:30:00",
            "packing_quantity": "30 comprimidos",
            "permanent": 1
        }
    ]
}
```

<a name="editar-tratamento-do-paciente-pelo-id-do-tratamento"></a>
##Editar Tratamento do Paciente pelo ID do tratamento

Método http e caminho: 

> {primary} PUT {{url('/')}}/api/prescriber/new-treatment/**{ID_DO_TRATAMENTO}**

### Parâmetros do body:

- **patient_id**  _Int_: id do paciente.
- **name_diagnosis**  _String_: Nome do diagnóstico.
- **name_medicine**  _String_: Nome do medicamento.
- **name_treatment**  _String_: Nome do tratamento.
- **presentation**  _String_: Unidade de medida.
- **how_many**  _String_: Quantidade.
- **frequency**  _String_: Frequencia.
- **start_treatment_date**  _String_: Data de inicio.
- **end_treatment_date**  _String_: Data de fim.


### Exemplo de payload da requisição

```json
{
    "patient_id": 2,
    "name_diagnosis": "Epilepsia",
    "name_medicine": "Canabidiol",
    "name_treatment": "Tratamento contra Epilepsia",
    "presentation": "gramas",
    "how_many": "3",
    "frequency": "3x por dia",
    "start_treatment_date": "2023-02-21",
    "end_treatment_date": "2023-02-21"
}
```

Por ex: 2.

> {primary} PUT {{url('/')}}/api/prescriber/new-treatment/**2**


### Respostas

#### Status: 200 OK

<a name="deletar-tratamento-do-paciente-pelo-id-do-tratamento"></a>
##Deletar Tratamento do Paciente pelo ID do tratamento

Método http e caminho: 

> {primary} DELETE {{url('/')}}/api/prescriber/new-treatment/**{ID_DO_TRATAMENTO}**


### Exemplo de payload da requisição

Por ex: 2.

> {primary} DELETE {{url('/')}}/api/prescriber/new-treatment/**2**


### Respostas

#### Status: 200 OK