<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Página Inicial</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>

<body>
  <div class="card">
    <nav class="card-nav">
      <img class="logo" src="../images/LogoEmpresa.png" alt="" />
      <input type="button" class="nav-button" value="Inicio" />
      <input type="button" class="nav-button" value="Login" />
      <input type="button" class="nav-button" value="Pedidos" />
      <span class="material-icons icon-person">person</span>
    </nav>

    <div class="card-header"></div>

    <div class="header-button">
      <input type="button" value="Cadastrar remédios" onclick="window.location='{{ route('medicamentos.create') }}'" />
      <input type="button" value="Cadastrar Usuário" />
      <input type="button" value="Ver remédios" onclick="window.location='{{ route('medicamentos.index') }}'" />
    </div>
  </div>

  <div class="card-conteiner-tittle">
    <p>Medicamentos</p>
  </div>


  <div  class="remedios-classificacao">
    <input type="button" value="Anti-inflamatórios" />
    <input type="button" value="Analgésicos" />
    <input type="button" value="Antibióticos" />
    <input type="button" value="Calmantes" />
    <input type="button" value="Anti-hipertensivos" />
    <input type="button" value="Antialérgicos" />
    <input type="button" value="Antipiréticos" />
    <input type="button" value="Antidepressivos" />

    <input type="button" value="Outros" />
  </div>

  <div class="card-conteiner">
    <div>
      <img src="../images/remedio1.png" alt="" />
      <h2>CAPTROIL 25 mg</h2>
    </div>
    <div>
      <img src="{{ asset('images/remedio2.png') }}" alt="" />
      <h2>DIPIRONA 25 mg | ml</h2>
    </div>
    <div>
      <img src="../images/remedio3.png" alt="" />
      <h2>LOROTADINA 1 mg | ml</h2>
    </div>
    <div>
      <img src="../images/nervocalm.png" alt="" />
      <h2>NERVOCALM 250 mg</h2>
    </div>
    <div>
      <img src="../images/refesgripe.png" alt="" />
      <h2>REFESGRIPE</h2>
    </div>
    <div>
      <img src="../images/seakalm.png" alt="" />
      <h2>SEAKALM 600 mg</h2>
    </div>
    <div>
      <img src="../images/azicox-2.jpg" alt="">
      <h2>AZICOX-2</h2>
    </div>
    <div>
      <img src="../images/biofloxacin.png" alt="">
      <h2>BIOFLOXACIN</h2>
    </div>
    <div>
      <img src="../images/calman.png" alt="">
      <h2>CALMAN</h2>
    </div>
    <div>
      <img src="../images/celesporin.png" alt="">
      <h2>CELESPORIN</h2>
    </div>
    <div>
      <img src="../images/clonazepam.jpg" alt="">
      <h2>CLONAZEPAM</h2>
    </div>
    <div>
      <img src="../images/doxitec.png" alt="">
      <h2>DOXITEC</h2>
    </div>
    <div>
      <img src="../images/neodexaFcreme.png" alt="">
      <h2>NEODEXA F CREME</h2>
    </div>
    <div>
      <img src="../images/torsilax.png" alt="">
      <h2>TORSILAX</h2>
    </div>
    <div>
      <img src="../images/amoxicilina.png" alt="">
      <h2>AMOXICILINA</h2>
    </div>
    <div>
      <img src="../images/ibuprofeno.png" alt="">
      <h2>IBUPROFENO</h2>
    </div>
    <div>
      <img src="../images/simeticona.png" alt="">
      <h2>SIMETICONA</h2>
    </div>
    <div>
      <img src="../images/paracetamol.png" alt="">
      <h2>PARACETAMOL</h2>
    </div>
    <div>
      <img src="../images/omeprazol.png" alt="">
      <h2>OMEPRAZOL</h2>
    </div>
    <div>
      <img src="../images/lozartana.png" alt="">
      <h2>LOZARTANA</h2>
    </div>
  </div>

  <h2 class="card-conteiner-tittle">Contato</h2>
  <form class="contact-form">
    <div class="form-group">
      <label for="name">Nome</label>
      <input type="text" id="name" name="name" required />
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" required />
    </div>
    <div class="form-group">
      <label for="subject">Assunto</label>
      <input type="text" id="subject" name="subject" required />
    </div>
    <div class="form-group">
      <label for="message">Mensagem</label>
      <textarea id="message" name="message" rows="5" required></textarea>
    </div>
    <button type="submit">Enviar</button>
  </form>

  <footer>
    <div class="footer_conteiner">
      &copy; 2024 Prefeitura Municipal de Almenara. Todos os direitos reservados.
    </div>
  </footer>

  <script src="../lib/rediect.js"></script>
</body>

</html>
