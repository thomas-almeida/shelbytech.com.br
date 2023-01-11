<div class="form-modal" id="modal">
    <div class="form-modal-content">
        <i class="fa fa-close" id="close-form" onclick="closeModal()" style="font-size:24px; color:#fff; cursor:pointer"></i>
        <h2>Entrar em contato</h2>

        <div class="form-container"> 
            <form action="https://formsubmit.co/contato.shelbytech@gmail.com" method="POST">
                <input type="text" name="name" placeholder="Nome" required>
                <br>
                <input type="email" name="email" placeholder="Email" required>
                <br>
                <input type="tel" name="Whatsapp" placeholder="Whatsapp" required>
                <br>
                <input type="text" name="Empresa / Proprietario" placeholder="Empresa / Proprietário" required>
                <br>

                <input type="hidden" name="_next" value="https://shelbytech.com.br/obrigado.php">
                <input type="hidden" name="_captcha" value="false">

                <textarea name="message" id="msg" placeholder="Mensagem" cols="30" rows="10"></textarea>
                <button type="submit">Garantir meus resultados ideais!</button>
            </form>

        </div>

    </div>
</div>