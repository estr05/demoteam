<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DC5</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
    }

    body {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: linear-gradient(135deg, #0f172a, #1e293b);
      color: #e5e7eb;
    }

    .card {
      background: rgba(15, 23, 42, 0.9);
      border-radius: 18px;
      padding: 32px 28px;
      max-width: 420px;
      width: 100%;
      box-shadow: 0 20px 40px rgba(15, 23, 42, 0.6);
      border: 1px solid rgba(148, 163, 184, 0.3);
      backdrop-filter: blur(10px);
      text-align: center;
    }

    h1 {
      font-size: 2rem;
      margin-bottom: 4px;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: #f97373;
    }

    .subtitle {
      font-size: 0.9rem;
      text-transform: uppercase;
      letter-spacing: 0.18em;
      color: #9ca3af;
      margin-bottom: 18px;
    }

    .team-title {
      font-size: 1.1rem;
      margin-bottom: 16px;
      color: #e5e7eb;
    }

    .tag {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 0.8rem;
      text-transform: uppercase;
      letter-spacing: 0.16em;
      padding: 6px 10px;
      border-radius: 999px;
      background: rgba(248, 113, 113, 0.1);
      color: #fecaca;
      border: 1px solid rgba(248, 113, 113, 0.5);
      margin-bottom: 22px;
    }

    .tag-dot {
      width: 8px;
      height: 8px;
      border-radius: 999px;
      background: #f97373;
      box-shadow: 0 0 12px rgba(248, 113, 113, 0.8);
    }

    ul {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 10px;
      margin-top: 6px;
    }

    li {
      text-align: left;
    }

    a {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 14px;
      border-radius: 10px;
      text-decoration: none;
      color: #e5e7eb;
      background: rgba(15, 23, 42, 0.6);
      border: 1px solid rgba(148, 163, 184, 0.4);
      font-size: 0.95rem;
      transition: transform 0.18s ease, box-shadow 0.18s ease, border-color 0.18s ease, background 0.18s ease;
    }

    a span.name {
      font-weight: 500;
    }

    a span.icon {
      font-size: 0.85rem;
      color: #fca5a5;
    }

    a:hover {
      transform: translateY(-2px) scale(1.01);
      border-color: #f97373;
      box-shadow: 0 12px 24px rgba(248, 113, 113, 0.28);
      background: radial-gradient(circle at top left, rgba(248, 113, 113, 0.25), rgba(15, 23, 42, 0.9));
    }

    .footer {
      margin-top: 20px;
      font-size: 0.75rem;
      color: #9ca3af;
      opacity: 0.9;
    }

    .footer span {
      color: #fca5a5;
      font-weight: 500;
    }

    @media (max-width: 480px) {
      .card {
        margin: 16px;
        padding: 24px 18px;
      }
      h1 {
        font-size: 1.6rem;
      }
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>Bienvenidos</h1>
    <p class="subtitle">Equipo Digital Code 5</p>

    <div class="tag">
      <div class="tag-dot"></div>
      <span>Integrantes</span>
    </div>

    <ul>
      <li>
        <a href="./eduardo.docx">
          <span class="name">Eduardo Aguilar Reyes</span>
          <span class="icon">Ver CV →</span>
        </a>
      </li>
      <li>
        <a href="./neyser.docx">
          <span class="name">Neyser Manuel Estrada Pérez</span>
          <span class="icon">Ver CV →</span>
        </a>
      </li>
      <li>
        <a href="./hannia.docx">
          <span class="name">Hannia Lysset Gutiérrez López</span>
          <span class="icon">Ver CV →</span>
        </a>
      </li>
      <li>
        <a href="./fatima">
          <span class="name">Fátima Marroquín Rentería</span>
          <span class="icon">Ver CV →</span>
        </a>
      </li>
    </ul>

    <p class="footer">
      Proyecto <span>DC5</span> · Desarrollo de competencias digitales
    </p>
  </div>
</body>
</html>
