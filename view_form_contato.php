<?
echo "<!-- Opa -->";
//Formulário de Contato
if( isset( $_POST["btn-enviar"] ) )
{

	if( !empty( $_POST["f_nome"] ) && !empty( $_POST["f_email"] ) && !empty( $_POST["f_mensagem"] ) )
	{
	
		$mensagem_data = date("d/m/Y");
		
		$nome 	 	 = trim( $_POST["f_nome"] );	
		$email_fic		 = 'formulario@make.digital';
		$email		 = trim( $_POST["f_email"] );
		$telefone		 = trim( $_POST["f_telefone"] );
		if(!empty($_POST["f_assunto"]))
			$assunto = $_POST["f_assunto"];
		else
			$assunto	 = 'Contato Site Leandro Silva';


		
		// Define os cabeçalhos a serem enviados
		$headers  = "From: Formulário - Leandro Silva - <$email_fic>\r\n";
		$headers .= "Return-Path: $email_fic\r\n";
		$headers .= "Content-Type: text/plain; charset=UTF-8;\r\n";
		
		$para = 'leandrojs15@gmail.com';

		// Mensagem	
		$mensagem = "AO RESPONDER A MENSAGEM, ALTERE O REMETENTE!\n\n";			
		$mensagem .= "Mensagem enviada através do site Leandro Silva Photography\n\n";			
		$mensagem .= "Data: $mensagem_data\n";
		$mensagem .= "Nome: $nome\n";
		$mensagem .= "E-mail: $email\n";
		$mensagem .= "Assunto: $assunto\n";
		$mensagem .= "Telefone: $telefone\n";
		$mensagem .= "\n\n";
		$mensagem .= trim($_POST["f_mensagem"]);
					

			// Envia a mensagem
			if( mail( $para, $assunto, $mensagem, $headers ) )
			{
				echo "<script language=\"JavaScript\" type=\"text/javascript\">";
					echo "alert('Sua mensagem foi enviada com sucesso.')";
				echo "</script>";
			}
			
			
		

	}	
}
?>		

