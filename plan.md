# Plano Detalhado para o Portal "Puro Luck" (Front-End Apenas)

Este plano define a estrutura e os ajustes necessários para criar um portal moderno para o salão de beleza "Puro Luck" usando HTML e CSS com a biblioteca Tailwind (via CDN). Como o foco é o front-end, não haverá integração com PHP (exceto para incluir templates comuns) ou SQL.

---

## Estrutura de Arquivos

A estrutura do projeto será organizada da seguinte forma:
```
/ (raiz)
│

├── header.php
├── footer.php
├── index.php
├── about.php
├── services.php
├── contact.php
└── assets/
    └── css/
         └── style.css
```

---

## 1. header.php

- **Finalidade:** Contém a declaração do DOCTYPE, metadados HTML, link para o Tailwind CSS via CDN e a barra de navegação comum.
- **Passos:**
  - Inicie o arquivo com `<!DOCTYPE html>` e abra as tags `<html>` e `<head>`.
  - Adicione `<meta charset="UTF-8">` e `<meta name="viewport" content="width=device-width, initial-scale=1.0">`.
  - Insira o título: `<title>Puro Luck - Salão de Beleza</title>`.
  - Link para o Tailwind CSS (via CDN):
    ```html
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
    ```
  - Inclua também o arquivo customizado `assets/css/style.css` para estilos adicionais.
  - Crie um header com um `<nav>` que contenha links navegacionais para "Home", "Sobre", "Serviços" e "Contato".
  - Utilize classes Tailwind para garantir uma interface moderna e responsiva.
- **Cuidados:** Utilize `require_once` nas páginas que incluírem o header para garantir que o arquivo seja carregado corretamente; trate erros se o arquivo não for encontrado.

---

## 2. footer.php

- **Finalidade:** Exibir informações de rodapé e fechar as tags abertas.
- **Passos:**
  - Crie uma seção de rodapé com uma mensagem de copyright.
  - Utilize classes Tailwind para um design simples e elegante.
  - Feche as tags `<body>` e `<html>`.
- **Exemplo de conteúdo:**
  ```html
  <footer class="bg-gray-800 text-white p-4 text-center">
      © <?php echo date("Y"); ?> Puro Luck. Todos os direitos reservados.
  </footer>
  </body>
  </html>
  ```

---

## 3. index.php

- **Finalidade:** Página inicial (landing page) com um layout impactante que introduz o salão.
- **Passos:**
  - Inicie com `<?php require_once('header.php'); ?>`.
  - Crie uma seção "Hero":
    - Utilize um `<div>` de largura total com uma imagem de fundo – use um `<img>` com src:  
      `https://placehold.co/1920x1080?text=Modern+beauty+salon+entrance+with+stylish+design `
    - Aplique um overlay com um título: "Bem-vindo ao Puro Luck" e uma tagline, usando cores e espaçamentos modernos.
  - Adicione seções breves para "Nossos Serviços" e "Sobre Nós" com botões de chamada para ação que direcionam para as páginas correspondentes.
  - Encerre com `<?php require_once('footer.php'); ?>`.

---

## 4. about.php

- **Finalidade:** Página "Sobre" que conta a história, missão e valores do salão.
- **Passos:**
  - Incluir `header.php` e `footer.php` como em index.php.
  - Crie uma seção com um cabeçalho e um parágrafo descritivo.
  - Opcional: Incluir uma imagem ilustrativa usando:
    ```html
    <img src="https://placehold.co/1200x800?text=Elegant+interior+of+modern+beauty+salon" 
         alt="Elegant interior of modern beauty salon showing a stylish and inviting ambiance" 
         onerror="this.onerror=null;this.src='';" class="w-full rounded">
    ```
- **Cuidados:** Garantir responsividade e hierarquia visual com espaçamentos consistentes.

---

## 5. services.php

- **Finalidade:** Listar os serviços oferecidos pelo salão, utilizando um layout de cards.
- **Passos:**
  - Incluir header e footer.
  - Crie uma grade (grid) com cards para cada serviço (ex.: Corte, Coloração, Tratamentos, Manicure/Pedicure).
  - Cada card deve conter:
    - Uma imagem com placeholder:
      ```html
      <img src="https://placehold.co/400x300?text=Professional+beauty+service+demonstration" 
           alt="Professional beauty service demonstration with clear modern styling" 
           onerror="this.onerror=null;this.src='';" class="w-full">
      ```
    - Título e curta descrição do serviço.
  - Utilize classes Tailwind para espaçamentos, bordas e sombras.
- **Boas práticas:** Manter consistência no uso de fontes e cores.

---

## 6. contact.php

- **Finalidade:** Exibir um formulário de contato e informações de contato.
- **Passos:**
  - Incluir header e footer.
  - Crie um formulário com os campos: Nome, Email, Telefone e Mensagem.
    - Exemplo:
      ```html
      <form method="POST" action="#" class="space-y-4">
          <input type="text" name="nome" placeholder="Seu Nome" required class="border p-2 w-full">
          <input type="email" name="email" placeholder="Seu Email" required class="border p-2 w-full">
          <input type="tel" name="telefone" placeholder="Telefone" class="border p-2 w-full">
          <textarea name="mensagem" placeholder="Sua Mensagem" required class="border p-2 w-full"></textarea>
          <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded">Enviar</button>
      </form>
      ```
  - Exiba dados de contato (endereço, telefone e email) em uma seção separada.
- **Validação:** Utilize os atributos `required` do HTML para validação básica de formulário.

---

## 7. assets/css/style.css

- **Finalidade:** Estilos customizados para complementar o Tailwind e reforçar a identidade visual da marca.
- **Passos:**
  - Crie regras CSS para personalizar cores (por exemplo, paleta de cores suave e elegante para "Puro Luck").
  - Ajuste estilos de tipografia e espaçamentos adicionais, se necessário.
  - Utilize comentários para organizar seções (ex.: /* Header Styles */, /* Footer Styles */).

---

## Considerações Gerais e Boas Práticas

- **Inclusões PHP:** Use `require_once` para incluir os arquivos `header.php` e `footer.php` em cada página, garantindo consistência e evitando duplicação.
- **Responsividade:** As classes Tailwind garantirão que a interface seja responsiva e evolua bem em diferentes dispositivos.
- **Acessibilidade:** Utilize textos alternativos detalhados para imagens e marque adequadamente os elementos de formulário.
- **Fallback para Imagens:** A cada imagem, adicione um atributo `onerror` para manter o layout caso a imagem não carregue.
- **Estrutura Semântica:** Utilize tags HTML5 (como `<section>`, `<nav>`, `<header>`, `<footer>`) para melhor semântica e SEO.
- **Design Moderno:** Foco em tipografia clara, cores suaves e espaçamentos generosos para uma experiência visual elegante e atraente.

---

## Resumo

- Crie uma estrutura de arquivos com páginas PHP (index.php, about.php, services.php, contact.php) e templates comuns (header.php, footer.php).  
- Utilize Tailwind CSS (via CDN) para estilos modernos e responsivos, complementado por um arquivo customizado style.css.  
- Implemente seções visuais marcantes na página inicial (hero, serviços e sobre) com imagens placeholder robustas e textos claros.  
- Configure páginas individuais para "Sobre", "Serviços" e "Contato", garantindo validação e acessibilidade.  
- Aplique boas práticas de PHP (require_once) e HTML5 semântico para consistência e SEO.  
- O design terá foco em uma interface limpa, elegante e adaptada a dispositivos móveis.

