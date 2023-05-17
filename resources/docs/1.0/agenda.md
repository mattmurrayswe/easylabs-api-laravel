# Agenda - Gestão de Disponibilidade

---
Os endpoints abaixo serão utilizados na hora do cadastro / leitura dos dados de Gestão de Disponibilidade, quando o **Prescritor** clicar em: **Configurar Agenda**

- [Gestão de Disponibilidade - Listar Datas](#listagem)
- [Gestão de Disponibilidade - Cadastrar Datas](#cadastro)

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


