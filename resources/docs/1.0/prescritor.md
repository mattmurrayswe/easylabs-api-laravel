# Autenticação e Cadastro

---

- [Criar um Paciente Usando Prescritor](#criar-paciente)
- [Conectar Paciente com Prescritor](#connect)
- [Desconecetar Paciente com Prescritor pelo ID](#disconect)
- [Ver Pacientes Conectados ao Prescritor Com Tratamento](#pacientes-conectados-ao-prescritor-com-tratamento)
- [Retornar Tratamento do Paciente pelo ID do Paciente](#retornar-tratamento-do-paciente-pelo-id-do-paciente)

> {success} Todas as requisições abaixo fazem o uso do **Bearer Token**, como forma de segurança. Portanto, no header de cada requisição é necessário utilizar o **token** que fora retornado na hora do login.

### Parâmetros do header:

- **Authorization**  _token_: Bearer Token.


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