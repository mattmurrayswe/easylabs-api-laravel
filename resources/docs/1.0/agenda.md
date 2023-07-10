# Agenda - Gestão de Disponibilidade

---
Os endpoints abaixo serão utilizados na hora do cadastro / leitura dos dados de Gestão de Disponibilidade, quando o **Prescritor** clicar em: **Configurar Agenda**

- [Gestão de Disponibilidade - Listar Datas](#listagem)
- [Gestão de Disponibilidade - Cadastrar Datas](#cadastro)
- [Gestão de Disponibilidade - Cadastrar Clinica Presencial](#cadastrar-clinica)
- [Gestão de Disponibilidade - Listar Clinica Presencial](#listar-clinica)
- [Gestão de Disponibilidade - Editar Clinica Presencial](#editar-clinica)
- [Gestão de Disponibilidade - Marcar Consulta](#marcar-consulta)
- [Gestão de Disponibilidade - Cancelar Consulta](#cancelar-consulta)
- [Gestão de Disponibilidade - Próximas Consultas](#next-consulta)
- [Gestão de Disponibilidade - Historico de Consultas](#last-consulta)
- [Gestão de Disponibilidade - Realizar Consulta](#do-consulta)

> {success} Todas as requisições abaixo fazem o uso do **Bearer Token**, como forma de segurança. Portanto, no header de cada requisição é necessário utilizar o **token** que fora retornado na hora do login.

### Parâmetros do header:

- **Authorization**  _token_: Bearer Token.

<a name="listagem"></a>
## Listagem das Datas

Método http e caminho: 

> {primary} POST {{url('/')}}/api/prescriber/get-availability


### Parâmetros do header:

- **Authorization**  _token_: Bearer Token.


### Respostas

#### Status: 200 OK - Vazio - Mostra que o **Prescritor** ainda não cadastrou datas e horários de atendimento

```json
{
    "success": {
        "message": "Sucesso!",
        "data": {
            "id": 6,
            "name_prescriber": "Matheus Murray",
            "dates": []
        }
    }
}
```

#### Status: 200 OK - Com dados - Mostra as datas cadastradas pelo **Prescritor**

```json
{
    "success": {
        "message": "Sucesso!",
        "data": {
            "id": 6,
            "name_prescriber": "Matheus Murray",
            "dates": [
                {
                    "day": "Segunda",
                    "start_time": "08:00:00",
                    "end_time": "12:00:00",
                    "period": "Manhã"
                },
                {
                    "day": "Segunda",
                    "start_time": "13:00:00",
                    "end_time": "17:00:00",
                    "period": "Tarde"
                },
                {
                    "day": "Terça",
                    "start_time": "08:00:00",
                    "end_time": "12:00:00",
                    "period": "Manhã"
                },
                {
                    "day": "Terça",
                    "start_time": "13:00:00",
                    "end_time": "17:00:00",
                    "period": "Tarde"
                },
                {
                    "day": "Quarta",
                    "start_time": "08:00:00",
                    "end_time": "12:00:00",
                    "period": "Manhã"
                },
                {
                    "day": "Quarta",
                    "start_time": "13:00:00",
                    "end_time": "17:00:00",
                    "period": "Tarde"
                }
            ]
        }
    }
}
```


<a name="cadastro"></a>
## Cadastro das Datas

Método http e caminho: 

> {primary} POST {{url('/')}}/api/prescriber/create-availability


### Parâmetros do header:

- **Authorization**  _token_: Bearer Token.

### Parâmetros do body:

- **prescriber_id**  _Int_: ID do médico
- **day_id**  _Int_: ID do dia ( 1 - Segunda, 2 - Terça, 3 - Quarta, 4 - Quinta, 5 - Sexta, 6 - Sabado, 7 - Domingo)
- **start_time**  _Time_: Hora do início da jornada
- **end_time**  _Time_: Hora do final da jornada
- **period_id**  _Int_: ID do período ( 1 - Manhã, 2 - Tarde)

O **BODY** deve ser acoplado com o Array **available_dates** !!

### Exemplo de payload da requisição


```json
{
   "available_dates":[
        {
            "prescriber_id": 6,
            "day_id": 1,
            "start_time": "08:00",
            "end_time": "12:00",
            "period_id": 1
        },
        {
            "prescriber_id": 6,
            "day_id": 1,
            "start_time": "13:00",
            "end_time": "17:00",
            "period_id": 2
        },
        {
            "prescriber_id": 6,
            "day_id": 2,
            "start_time": "08:00",
            "end_time": "12:00",
            "period_id": 1
        },
        {
            "prescriber_id": 6,
            "day_id": 2,
            "start_time": "13:00",
            "end_time": "17:00",
            "period_id": 2
        },
        {
            "prescriber_id": 6,
            "day_id": 3,
            "start_time": "08:00",
            "end_time": "12:00",
            "period_id": 1
        },
        {
            "prescriber_id": 6,
            "day_id": 3,
            "start_time": "13:00",
            "end_time": "17:00",
            "period_id": 2
        }
    ]
    
}
```
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


<a name="cadastrar-clinica"></a>
## Criar Clinica

Método http e caminho: 

> {primary} POST {{url('/')}}/api/prescriber/create-clinic-adress

### Parâmetros do body:
- **cep**  _String_: CEP da Clinica
- **street**  _String_: Rua da Clinica
- **number**  _String_: Numero da Clinica
- **complement**  _String_: Complemento da Clinica
- **neighboor**  _String_: Bairro da Clinica
- **city**  _String_: Cidade da Clinica
- **state**  _String_: Estado da Clinica

```json
{
    "cep":"82650480",
    "street":"Rua Sao Jeronimo da Serra",
    "number":"144",
    "complement":"sob 04",
    "neighboor":"Sarewrwenta Candaida",
    "city":"Curitiba",
    "state":"Parana"
}
```


### Respostas

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": "Clinica cadastrada com sucesso"
    }
}
```

<a name="listar-clinica"></a>
## Listar Clinica

Método http e caminho: 

> {primary} GET {{url('/')}}/api/prescriber/get-clinic-adress


### Respostas

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": {
            "id": 3,
            "cep": "82650480",
            "street": "Rua Mamore",
            "number": "144",
            "complement": "sob 04",
            "neighboor": "Sarewrwenta Candaida",
            "city": "Curitiba",
            "state": "Parana"
        }
    }
}
```

<a name="editar-clinica"></a>
## Editar Clinica

Método http e caminho: 

> {primary} PUT {{url('/')}}/api/prescriber/update-clinic-adress

### Parâmetros do body:
- **cep**  _String_: CEP da Clinica
- **street**  _String_: Rua da Clinica
- **number**  _String_: Numero da Clinica
- **complement**  _String_: Complemento da Clinica
- **neighboor**  _String_: Bairro da Clinica
- **city**  _String_: Cidade da Clinica
- **state**  _String_: Estado da Clinica

```json
{
    "cep":"82650480",
    "street":"Rua Mamore",
    "number":"144",
    "complement":"sob 04",
    "neighboor":"Sarewrwenta Candaida",
    "city":"Curitiba",
    "state":"Parana"
}
```

### Respostas

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": "Clinica alterada com sucesso"
    }
}
```

<a name="marcar-consulta"></a>
## Marcar Consulta

Método http e caminho: 

> {primary} POST {{url('/')}}/api/prescriber/create-appointment

### Parâmetros do body:
- **patient_id**  _String_: ID DO PACIENTE
- **description**  _String_: DESCRICAO DA CONSULTA
- **appointment_date**  _String_: DATA DA CONSULTA
- **appointment_time**  _String_: HORA DA CONSULTA
- **type**  _String_: Tipo da consulta ( presencial x telemedicina)


```json
{
    "patient_id":27,
    "description":"Consulta teste",
    "appointment_date":"2023-07-26",
    "appointment_time":"16:00",
    "type":"presencial"
}

```

### Respostas

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": {
            "patient_id": 27,
            "prescriber_id": 6,
            "description": "Consulta teste",
            "appointment_date": "2023-07-26",
            "appointment_time": "16:00",
            "type": "presencial",
            "updated_at": "2023-07-08T22:14:14.000000Z",
            "created_at": "2023-07-08T22:14:14.000000Z",
            "id": 16
        }
    }
}
```


<a name="cancelar-consulta"></a>
## Cancelar Consulta

Método http e caminho: 

> {primary} DELETE {{url('/')}}/api/prescriber/drop-appointment/**{ID_DA_CONSULTA}**

Ex: 16

> {primary} DELETE {{url('/')}}/api/prescriber/drop-appointment/**16**


### Respostas

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": "Consulta desmarcada com sucesso!"
    }
}
```


<a name="next-consulta"></a>
## Proximas Consultas

Método http e caminho: 

> {primary} GET {{url('/')}}/api/prescriber/next-appointments



### Respostas

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": "Sem consultas futuras"
    }
}
```

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": [
            {
                "id": 18,
                "description": "Consulta teste",
                "appointment_date": "2023-07-26",
                "appointment_time": "16:00:00",
                "patient": {
                    "id": 27,
                    "name": "John Doe",
                    "email": "fernandoviviurka97@gmail.com",
                    "email_verified_at": null,
                    "cpf": "12345678911",
                    "cellphone": "(11) 55932-4370",
                    "birth": "1997-12-18",
                    "active": 1,
                    "created_at": "2023-04-20T02:26:50.000000Z",
                    "updated_at": "2023-04-20T12:40:40.000000Z",
                    "push_notification": null,
                    "email_notification": null,
                    "remember_medicine": null,
                    "treatment_feedback": null,
                    "prescriber_id": null
                },
                "prescriber": {
                    "id": 6,
                    "name": "Matheus Murray",
                    "email": "matheusmurray@gmail.com",
                    "email_verified_at": null,
                    "cpf": "07862803958",
                    "cellphone": "11994273409",
                    "crm": "CRM/SP 123457.",
                    "indicate_clinic": true,
                    "active": 1,
                    "cnpj": "20606190000109",
                    "company_name": "Hospital Geral de Curitiba",
                    "address": [],
                    "documents": [],
                    "deleted_at": null,
                    "created_at": "2023-04-17T15:09:39.000000Z",
                    "updated_at": "2023-07-08T22:10:23.000000Z",
                    "attend_in_person": null,
                    "clinic_adress_id": 4
                },
                "type": "presencial",
                "address": {
                    "id": 4,
                    "cep": "82650480",
                    "street": "Rua Mamore",
                    "number": "144",
                    "complement": "sob 04",
                    "neighboor": "Sarewrwenta Candaida",
                    "city": "Curitiba",
                    "state": "Parana"
                }
            }
        ]
    }
}
```

<a name="last-consulta"></a>
## Historico de Consultas

Método http e caminho: 

> {primary} GET {{url('/')}}/api/prescriber/past-appointments



### Respostas

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": "Sem consultas realizadas"
    }
}
```

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": [
            {
                "id": 18,
                "description": "Consulta teste",
                "appointment_date": "2023-07-07",
                "appointment_time": "16:00:00",
                "patient": {
                    "id": 27,
                    "name": "John Doe",
                    "email": "fernandoviviurka97@gmail.com",
                    "email_verified_at": null,
                    "cpf": "12345678911",
                    "cellphone": "(11) 55932-4370",
                    "birth": "1997-12-18",
                    "active": 1,
                    "created_at": "2023-04-20T02:26:50.000000Z",
                    "updated_at": "2023-04-20T12:40:40.000000Z",
                    "push_notification": null,
                    "email_notification": null,
                    "remember_medicine": null,
                    "treatment_feedback": null,
                    "prescriber_id": null
                },
                "prescriber": {
                    "id": 6,
                    "name": "Matheus Murray",
                    "email": "matheusmurray@gmail.com",
                    "email_verified_at": null,
                    "cpf": "07862803958",
                    "cellphone": "11994273409",
                    "crm": "CRM/SP 123457.",
                    "indicate_clinic": true,
                    "active": 1,
                    "cnpj": "20606190000109",
                    "company_name": "Hospital Geral de Curitiba",
                    "address": [],
                    "documents": [],
                    "deleted_at": null,
                    "created_at": "2023-04-17T15:09:39.000000Z",
                    "updated_at": "2023-07-08T22:10:23.000000Z",
                    "attend_in_person": null,
                    "clinic_adress_id": 4
                },
                "type": "presencial",
                "address": {
                    "id": 4,
                    "cep": "82650480",
                    "street": "Rua Mamore",
                    "number": "144",
                    "complement": "sob 04",
                    "neighboor": "Sarewrwenta Candaida",
                    "city": "Curitiba",
                    "state": "Parana"
                }
            }
        ]
    }
}
```


<a name="do-consulta"></a>
## Realizar de Consultas

Método http e caminho: 

> {primary} POST {{url('/')}}/api/prescriber/end-appointments/**{ID_DA_CONSULTA}**

Ex:18

> {primary} POST {{url('/')}}/api/prescriber/end-appointments/**18**


### Respostas

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": "Consulta encerrada"
    }
}
```
