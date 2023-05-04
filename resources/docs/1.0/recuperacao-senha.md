<a name="recuperacao-senha"></a>

# Recuperação de Senha

---

- [Recuperacao de senha](#recuperacao-senha)
    - [Passo 1 - Envio do código](#recuperacao-senha-passo-1)
    - [Passo 2 - Validação do código](#recuperacao-senha-passo-2)
    - [Passo 3 - Alteração de senha](#recuperacao-senha-passo-3)


As chamadas abaixo servem tanto para Paciente quanto para Prescritor **mudando apenas a url, passando a entidade desejada**. 

> {primary} POST {{url('/')}}/api/{**entidade**}/recover-password

No lugar de **{entidade}**, podemos colocar: 
- **paciente** = Referindo-se a Paciente
- **prescriber** = Referindo-se a Prescritor

<a name="recuperacao-senha-passo-1"></a>
## Passo 1 - Envio do código

Método http e caminho: 

> {primary} POST {{url('/')}}/api/{**entidade**}/recover-password

### Parâmetros do body:

- **email**  _string_: O email válido, registrado para login.

### Exemplo de payload da requisição

```json
{
    "email":"doc@gmail.com"
}
```

### Respostas

#### Status: 200 OK

```json
{
    "recoveryCode": "234985"
}
```



<a name="recuperacao-senha-passo-2"></a>
## Passo 2 - Validação do código

Método http e caminho: 

> {primary} POST {{url('/')}}/api/{**entidade**}/confirm-recovery-code

### Parâmetros do body:

- **email**  _string_: O email válido, registrado para login.
- **token**  _string_: O token válido, enviado para o email cadastrado.

### Exemplo de payload da requisição

```json
{
    "email":"fernandoviviurka97@gmail.com",
    "token": "234985"
}
```

### Respostas

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": "Seu código foi validado com sucesso!"
    }
}
```



<a name="recuperacao-senha-passo-3"></a>
## Passo 3 - Alteração de senha

Método http e caminho: 

> {primary} POST {{url('/')}}/api/{**entidade**}/new-password

### Parâmetros do body:

- **email**  _string_: O email válido, registrado para login.
- **password**  _string_: A nova senha.

### Exemplo de payload da requisição

```json
{
    "email":"doc@gmail.com",
    "password":"Teste@123"
}
```

### Respostas

#### Status: 200 OK

```json
{
    "success": {
        "message": "Sucesso!",
        "data": "Senha alterada com sucesso!"
    }
}
```



