<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body style="background-color: rgb(136, 205, 245);">
    

   
    <table style="text-align: center;">
        <tr>
            <td>
                <img src="{{asset('/img/mails/Welcome_Email.png')}}" alt="" width="100%">
            </td>
        </tr>
        <tr>
            <td>
                <h2 style="color: midnightblue;"><i>Te damos la bienvenida</i></h2>
            </td>
            
        </tr>
        <tr>
            <td>
                <div class="panel" style="background-color: #fff; width: 80%;padding: 10px; margin: auto; border-radius: 3px;">

                    <form action=""></form>
                    <p><a href="https://algodeprueba.tk/developers/{{$user_id[0]->id}}/{{$user_id[0]->email}}" style="text-decoration: none;font-size: 1.3em;color: midnightblue;">Sigue este enlace para confirmar tu cuenta.</a></p>
                </div>
            </td>
        </tr>

        <tr>
            <td>
                <div style="background-color: rgb(14, 0, 36); width: 80%;padding: 10px; margin: auto; border-radius: 3px;">

                </div>
            </td>
        </tr>
    </table> 
    
</body>
</html>