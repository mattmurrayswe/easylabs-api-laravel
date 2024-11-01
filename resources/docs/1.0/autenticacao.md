# Autenticação e Cadastro

---

- [Paciente](#paciente-login)
 - [Login](#paciente-login)
 - [Cadastro](#paciente-cadastro)

- [Prescritor](#prescritor-login)
 - [Login](#prescritor-login)
 - [Cadastro](#prescritor-cadastro)

- [Logout](#logout)
- [OAuth-Google](#oauthgoogle)


<a name="paciente-login"></a>
## Login de Paciente

Método http e caminho: 

> {primary} POST {{url('/')}}/api/patient/login


### Parâmetros do body:

- **email**  _string_: O email válido, registrado para login do paciente.
- **password**  _string_: A senha do paciente.

### Exemplo de payload da requisição

```json
{
    "email": "doc@gmail.com",
    "password": "Senha@123",
}
```

### Respostas

#### Status: 200 OK

```json
{
    "user": {
        "id": 28,
        "name": "John Doe",
        "email": "doc@gmail.com",
        "createdAt": "04-05-2023"
    },
    "token": "114|DeHT4A6hd6Hbrsk41wY9M7OIthCrNAp58Adl9uQC"
}
```

> {success} Utilize o valor do campo **token** para enviar no cabeçalho das demais requisições da API.


<a name="paciente-cadastro"></a>
## Cadastro de Paciente

Método http e caminho: 

> {primary} POST {{url('/')}}/api/patient/signup


### Parâmetros do body:

- **name**  _string_: O nome do paciente.
- **email**  _string_: O email do paciente.
- **password**  _string_: A senha do paciente.
- **password_confirmation**  _string_: A confirmação senha do paciente.
- **cpf**  _string_: O CPF válido e único do paciente.
- **cellphone**  _string_: O celular válido e único do paciente.
- **birth**  _date_: A confirmação senha do paciente.

### Exemplo de payload da requisição

```json
{
    "name": "John Doe",
    "email": "doc@gmail.com",
    "password": "Senha@123",
    "password_confirmation": "Senha@123",
    "cpf": "13126440107",
    "cellphone": "(11) 55932-4370",
    "birth": "1997-12-18"
}
```

### Respostas

#### Status: 200 OK

```json
{
    "user": {
        "id": 28,
        "name": "John Doe",
        "email": "doc@gmail.com",
        "createdAt": "04-05-2023"
    },
    "token": "113|sXcvnN1eJCsdZR1yptTtiFp9XEZLBv2neFkgU2WS"
}
```

> {success} Utilize o valor do campo **token** para enviar no cabeçalho das demais requisições da API.




<a name="prescritor-login"></a>
## Login de Prescritor

Método http e caminho: 

> {primary} POST {{url('/')}}/api/prescriber/login


### Parâmetros do body:

- **email**  _string_: O email válido, registrado para login do paciente.
- **password**  _string_: A senha do paciente.

### Exemplo de payload da requisição

```json
{
    "email" : "matheusmurray@gmail.com",
    "password": "Senha@008"
}
```

### Respostas

#### Status: 200 OK

```json
{
    "user": {
        "id": 6,
        "name": "Matheus Murray",
        "email": "matheusmurray@gmail.com",
        "createdAt": "17-04-2023"
    },
    "token": "115|GNwIlm0lvVhlS3eA5hMNXbgEgUgGLtih9REJVnlf"
}
```

> {success} Utilize o valor do campo **token** para enviar no cabeçalho das demais requisições da API.


<a name="prescritor-cadastro"></a>
## Cadastro de Prescritor

Método http e caminho: 

> {primary} POST {{url('/')}}/api/prescriber/signup


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
{
    "user": {
        "id": 22,
        "name": "Matheus Murray",
        "email": "matheusmurraydev6@gmail.com",
        "createdAt": "02-06-2023"
    },
    "token": "165|8SQAlAsSetz133aw4r53dQCYgnkmgrhE1UJLC5D7"
}
```

#### Status: 422 Unprocessable Content

```json
{
    "error": {
        "message": {
            "errorInfo": [
                "HY000",
                1364,
                "Field 'active' doesn't have a default value"
            ],
            "connectionName": "mysql"
        }
    }
}
```

> {success} Utilize o valor do campo **token** para enviar no cabeçalho das demais requisições da API.



<a name="logout"></a>
## Logout

As chamadas abaixo servem tanto para Paciente quanto para Prescritor **mudando apenas a url, passando a entidade desejada**. 

> {primary} POST {{url('/')}}/api/{**entidade**}/logout

No lugar de **{entidade}**, podemos colocar: 
- **paciente** = Referindo-se a Paciente
- **prescriber** = Referindo-se a Prescritor


> {primary} POST {{url('/')}}/api/{**entidade**}/logout


### Parâmetros do header:

- **Authorization**  _token_: Bearer Token.

### Respostas

#### Status: 204 No Content

```json 
{

}
```

A resposta da API vem vazia, mostrando que o logout fora realizado com sucesso!



<a name="oauthgoogle"></a>
## Autenticação OAuth Google

As chamadas abaixo servem somente para **PACIENTE**. Fornecem um login e cadastro via Google, ou seja, o email será vinculado a uma conta ja existente, ou uma nova conta será cadastrada a partir dele. 

> {primary} GET {{url('/')}}/api/patient/auth/google

Após fazer a requisição **GET**, abrirá um POPUP na tela solicitando a entrada do usuário e senha do Google.
Deve inserir a informacoes corretas, e a partir disso, a própria API vai realizar o login ou cadastrar um novo paciente.
**O redirecionamento para as telas "pos" autenticadas, deverá ser feita pelo próprio desenvolvedor.**
### Respostas

#### Status: 200

```json
{
    "user": {
        "id": 28,
        "name": "John Doe",
        "email": "doc@gmail.com",
        "createdAt": "04-05-2023"
    },
    "token": "114|DeHT4A6hd6Hbrsk41wY9M7OIthCrNAp58Adl9uQC"
}
```


