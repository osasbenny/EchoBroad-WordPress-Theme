<?php
/**
 * Template Name: Case Study Page
 *
 * @package EchoBroad
 */

get_header();
?>

<style>
/* ── TOKENS ── */
:root {
  --void:       #060608;
  --ink:        #0e0e12;
  --surface:    #13131a;
  --border:     rgba(255,255,255,0.07);
  --muted:      #5a5a6e;
  --smoke:      #9898aa;
  --light:      #e8e8f0;
  --white:      #f8f8fc;

  --gold:       #c9a84c;
  --gold-dim:   rgba(201,168,76,0.15);
  --gold-glow:  rgba(201,168,76,0.08);

  --amber:      #c97c3a;
  --amber-dim:  rgba(201,124,58,0.12);
  --amber-pale: #f2dcc8;

  --rose:       #b86478;
  --rose-dim:   rgba(184,100,120,0.12);
  --rose-pale:  #f2d0d8;

  --success:    #3db87a;
}

.case-study-body {
  background: var(--void);
  color: var(--light);
  font-family: 'DM Sans', sans-serif;
  font-weight: 400;
  overflow-x: hidden;
  -webkit-font-smoothing: antialiased;
  position: relative;
}

/* grain overlay */
.case-study-body::before {
  content:'';
  position:fixed; inset:0;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='200' height='200'%3E%3Cfilter id='g'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='200' height='200' filter='url(%23g)' opacity='0.035'/%3E%3C/svg%3E");
  pointer-events:none; z-index:9000;
}

/* ── TYPOGRAPHY ── */
.f-display {
  font-family: 'Fraunces', serif;
  font-optical-sizing: auto;
}
.f-ui {
  font-family: 'Space Grotesk', sans-serif;
}
.f-body { font-family: 'DM Sans', sans-serif; }

/* ── NAV ── */
.nav-cs {
  position: fixed; top:0; left:0; right:0; z-index:800;
  display: flex; align-items: center; justify-content: space-between;
  padding: 0 56px;
  height: 64px;
  background: rgba(6,6,8,0.82);
  backdrop-filter: blur(24px);
  border-bottom: 1px solid var(--border);
}

.nav-logo-cs {
  font-family: 'Fraunces', serif;
  font-weight: 700;
  font-size: 17px;
  letter-spacing: 0.02em;
  color: var(--white);
  text-decoration: none;
}
.nav-logo-cs i { color: var(--gold); font-style:italic; }

.nav-right-cs { display:flex; align-items:center; gap:32px; }
.nav-link-cs {
  font-family:'Space Grotesk',sans-serif;
  font-size:12px;
  font-weight:500;
  letter-spacing:0.08em;
  text-transform:uppercase;
  color:var(--smoke);
  text-decoration:none;
  transition:color .2s;
}
.nav-link-cs:hover { color:var(--white); }

.btn-primary-cs {
  display:inline-flex; align-items:center; gap:8px;
  font-family:'Space Grotesk',sans-serif;
  font-size:11px; font-weight:700;
  letter-spacing:0.12em; text-transform:uppercase;
  color:var(--void);
  background:var(--gold);
  padding:11px 28px;
  text-decoration:none;
  transition:all .25s;
  border:none; cursor:pointer;
}
.btn-primary-cs:hover { background:#dbb95a; transform:translateY(-2px); box-shadow:0 8px 30px rgba(201,168,76,0.35); }

/* ── HERO ── */
.hero-cs {
  min-height:100vh;
  padding-top:64px;
  display:grid;
  grid-template-columns:1fr 1fr;
  position:relative;
  overflow:hidden;
}

.hero-glow-cs {
  position:absolute;
  width:800px; height:800px;
  background:radial-gradient(circle, rgba(201,168,76,0.055) 0%, transparent 65%);
  top:50%; left:25%; transform:translate(-50%,-50%);
  pointer-events:none;
}

.hero-left-cs {
  display:flex; flex-direction:column; justify-content:center;
  padding:80px 56px 80px 80px;
  position:relative; z-index:2;
}

.hero-eyebrow-cs {
  display:flex; align-items:center; gap:12px;
  font-family:'Space Grotesk',sans-serif;
  font-size:10px; font-weight:700;
  letter-spacing:0.3em; text-transform:uppercase;
  color:var(--gold);
  margin-bottom:32px;
  opacity:0; animation:up-cs .9s cubic-bezier(.16,1,.3,1) .1s forwards;
}
.hero-eyebrow-cs span { display:inline-block; width:28px; height:1px; background:var(--gold); }

.hero-h1-cs {
  font-family:'Fraunces',serif;
  font-size:clamp(50px,6.5vw,88px);
  font-weight:900;
  line-height:.95;
  letter-spacing:-.03em;
  color:var(--white);
  margin-bottom:28px;
  opacity:0; animation:up-cs .9s cubic-bezier(.16,1,.3,1) .25s forwards;
}
.hero-h1-cs em { color:var(--gold); font-style:italic; }

.hero-p-cs {
  font-size:15px; line-height:1.85;
  color:var(--smoke); max-width:420px;
  margin-bottom:52px;
  opacity:0; animation:up-cs .9s cubic-bezier(.16,1,.3,1) .4s forwards;
}

.hero-proof-cs {
  display:flex; gap:48px;
  opacity:0; animation:up-cs .9s cubic-bezier(.16,1,.3,1) .55s forwards;
}

.hero-proof-num-cs {
  font-family:'Fraunces',serif;
  font-size:42px; font-weight:700; line-height:1;
  color:var(--gold); margin-bottom:5px;
}
.hero-proof-label-cs {
  font-family:'Space Grotesk',sans-serif;
  font-size:9px; font-weight:600;
  letter-spacing:0.25em; text-transform:uppercase;
  color:var(--muted);
}

.hero-right-cs {
  display:grid; grid-template-rows:1fr 1fr;
  border-left:1px solid var(--border);
}

.hero-brand-tile-cs {
  position:relative; overflow:hidden;
  display:flex; flex-direction:column; justify-content:flex-end;
  padding:44px 48px;
  opacity:0; animation:fade-cs .9s ease .6s forwards;
}
.hero-brand-tile-cs + .hero-brand-tile-cs { border-top:1px solid var(--border); }

.tile-bg-cs {
  position:absolute; inset:0;
  background-size:cover; background-position:center;
  filter:grayscale(20%) brightness(.45);
  transition:transform 6s ease;
}
.hero-brand-tile-cs:hover .tile-bg-cs { transform:scale(1.04); }

.tile-gradient-cs {
  position:absolute; inset:0;
  pointer-events:none;
}
.tile-gradient--exec-cs { background:linear-gradient(135deg, rgba(201,124,58,.18) 0%, rgba(6,6,8,.9) 60%); }
.tile-gradient--ely-cs  { background:linear-gradient(135deg, rgba(184,100,120,.18) 0%, rgba(6,6,8,.9) 60%); }

.tile-content-cs { position:relative; z-index:2; }
.tile-chip-cs {
  display:inline-flex; align-items:center; gap:6px;
  font-family:'Space Grotesk',sans-serif;
  font-size:9px; font-weight:700;
  letter-spacing:0.25em; text-transform:uppercase;
  margin-bottom:10px;
}
.tile-chip--exec-cs { color:var(--amber); }
.tile-chip--ely-cs  { color:var(--rose); }
.tile-dot-cs { width:5px; height:5px; border-radius:50%; background:currentColor; }

.tile-name-cs {
  font-family:'Fraunces',serif;
  font-size:32px; font-weight:900;
  letter-spacing:-.02em; color:var(--white);
}

/* ── COMBINED STATS BANNER ── */
.stats-banner-cs {
  background:var(--surface);
  border-top:1px solid var(--border);
  border-bottom:1px solid var(--border);
  display:grid; grid-template-columns:repeat(4,1fr);
}

.stat-cell-cs {
  padding:44px 40px;
  border-right:1px solid var(--border);
  position:relative; overflow:hidden;
}
.stat-cell-cs:last-child { border-right:none; }
.stat-cell-cs::after {
  content:''; position:absolute; bottom:0; left:0;
  width:0; height:2px; background:var(--gold);
  transition:width .5s ease;
}
.stat-cell-cs:hover::after { width:100%; }

.stat-label-cs {
  font-family:'Space Grotesk',sans-serif;
  font-size:9px; font-weight:700;
  letter-spacing:0.3em; text-transform:uppercase;
  color:var(--muted); margin-bottom:14px;
}
.stat-num-cs {
  font-family:'Fraunces',serif;
  font-size:clamp(34px,3.5vw,50px); font-weight:700;
  line-height:1; color:var(--gold); margin-bottom:6px;
}
.stat-sub-cs {
  font-size:12px; color:var(--muted);
}

/* ── SECTION SHELL ── */
.case-shell-cs {
  width:100%; position:relative;
}
.case-shell--exec-cs { background:var(--ink); }
.case-shell--ely-cs  { background:#0b090e; }

.case-inner-cs { max-width:1360px; margin:0 auto; padding:0 72px; }

/* ── CASE HEADER ── */
.case-head-cs {
  padding:100px 0 64px;
  display:grid; grid-template-columns:1.3fr 1fr;
  gap:80px; align-items:end;
  border-bottom:1px solid var(--border);
  position:relative;
}

.bg-num-cs {
  font-family:'Fraunces',serif;
  font-size:240px; font-weight:900;
  position:absolute; right:-20px; top:30px;
  opacity:.025; line-height:1;
  user-select:none; pointer-events:none;
  color:var(--white);
}

.case-chip-cs {
  font-family:'Space Grotesk',sans-serif;
  font-size:9px; font-weight:700;
  letter-spacing:.3em; text-transform:uppercase;
  margin-bottom:18px;
}
.exec-cs .case-chip-cs { color:var(--amber); }
.ely-cs  .case-chip-cs { color:var(--rose); }

.case-name-cs {
  font-family:'Fraunces',serif;
  font-size:clamp(56px,7vw,104px);
  font-weight:900; line-height:.88;
  letter-spacing:-.03em; color:var(--white);
  margin-bottom:20px;
}

.case-tagline-cs {
  font-family:'Fraunces',serif;
  font-size:18px; font-style:italic;
  font-weight:300; color:var(--smoke);
  margin-bottom:20px; line-height:1.5;
}

.case-desc-cs {
  font-size:14px; line-height:1.9; color:var(--muted);
  max-width:480px;
}
.case-desc-cs strong { color:var(--light); font-weight:500; }

.case-meta-cs { display:flex; flex-direction:column; gap:22px; }
.cm-key-cs {
  font-family:'Space Grotesk',sans-serif;
  font-size:9px; font-weight:600;
  letter-spacing:.25em; text-transform:uppercase;
  color:var(--muted); margin-bottom:5px;
}
.cm-val-cs {
  font-size:14px; font-weight:600; color:var(--light);
}

/* ── METRICS STRIP ── */
.metrics-strip-cs {
  display:grid; grid-template-columns:repeat(5,1fr);
  border-bottom:1px solid var(--border);
}

.mc-cs {
  padding:44px 36px;
  border-right:1px solid var(--border);
  position:relative; overflow:hidden;
  transition:background .3s;
}
.mc-cs:last-child { border-right:none; }
.mc-cs:hover { background:rgba(255,255,255,0.02); }

.mc-cs::before {
  content:''; position:absolute;
  top:0; left:0; right:0; height:2px;
}
.exec-cs .mc-cs::before { background:var(--amber); opacity:0; transition:opacity .3s; }
.ely-cs  .mc-cs::before { background:var(--rose);  opacity:0; transition:opacity .3s; }
.mc-cs:hover::before { opacity:1; }

.mc-key-cs {
  font-family:'Space Grotesk',sans-serif;
  font-size:8px; font-weight:700;
  letter-spacing:.25em; text-transform:uppercase;
  color:var(--muted); margin-bottom:12px;
}
.mc-val-cs {
  font-family:'Fraunces',serif;
  font-size:32px; font-weight:700;
  line-height:1; color:var(--white); margin-bottom:6px;
}
.mc-note-cs {
  font-size:10px; color:var(--muted);
}

/* ── TWO COL ── */
.two-col-cs {
  display:grid; grid-template-columns:1fr 1fr;
  gap:100px; padding:100px 0;
  border-bottom:1px solid var(--border);
}

.col-eyebrow-cs {
  font-family:'Space Grotesk',sans-serif;
  font-size:9px; font-weight:700;
  letter-spacing:.3em; text-transform:uppercase;
  color:var(--gold); margin-bottom:24px;
}
.col-h3-cs {
  font-family:'Fraunces',serif;
  font-size:36px; font-weight:700;
  line-height:1.15; color:var(--white);
  margin-bottom:24px;
}
.col-p-cs {
  font-size:14.5px; line-height:1.85;
  color:var(--smoke); margin-bottom:20px;
}
.col-p-cs strong { color:var(--light); }

.check-list-cs { list-style:none; display:flex; flex-direction:column; gap:18px; }
.check-list-cs li {
  position:relative; padding-left:28px;
  font-size:14px; line-height:1.6; color:var(--smoke);
}
.check-list-cs li::before {
  content:'✓'; position:absolute; left:0; top:0;
  color:var(--gold); font-weight:900;
}

/* ── STRATEGY STEPS ── */
.strategy-row-cs { padding:100px 0; border-bottom:1px solid var(--border); }
.strategy-eyebrow-cs {
  font-family:'Space Grotesk',sans-serif;
  font-size:9px; font-weight:700;
  letter-spacing:.3em; text-transform:uppercase;
  color:var(--muted); margin-bottom:48px;
  text-align:center;
}

.steps-cs { display:grid; grid-template-columns:repeat(3,1fr); gap:40px; }
.step-cs { position:relative; }
.step-n-cs {
  font-family:'Fraunces',serif;
  font-size:64px; font-weight:900;
  color:var(--gold); opacity:.15;
  line-height:1; margin-bottom:-20px;
}
.step-title-cs {
  font-size:15px; font-weight:700;
  color:var(--white); margin-bottom:14px;
  position:relative; z-index:2;
}
.step-text-cs {
  font-size:13.5px; line-height:1.8;
  color:var(--muted);
}

/* ── BEFORE AFTER ── */
.ba-row-cs { padding:100px 0; border-bottom:1px solid var(--border); }
.ba-eyebrow-cs {
  font-family:'Space Grotesk',sans-serif;
  font-size:9px; font-weight:700;
  letter-spacing:.3em; text-transform:uppercase;
  color:var(--muted); margin-bottom:48px;
  text-align:center;
}

.ba-grid-cs {
  display:grid; grid-template-columns:1fr 72px 1fr;
  background:var(--surface);
  border:1px solid var(--border);
}

.ba-side-cs { padding:48px 56px; }
.ba-side--after-cs { border-left:1px solid var(--border); }

.ba-side-label-cs {
  display:flex; align-items:center; gap:10px;
  font-family:'Space Grotesk',sans-serif;
  font-size:10px; font-weight:700;
  letter-spacing:.2em; text-transform:uppercase;
  margin-bottom:32px;
}
.ba-dot-cs { width:6px; height:6px; border-radius:50%; background:currentColor; }
.ba-side--before-cs .ba-side-label-cs { color:var(--muted); }
.exec-cs .ba-side--after-cs .ba-side-label-cs { color:var(--amber); }
.ely-cs  .ba-side--after-cs .ba-side-label-cs { color:var(--rose); }

.ba-item-cs {
  display:flex; justify-content:space-between; align-items:center;
  padding:18px 0; border-bottom:1px solid rgba(255,255,255,0.04);
}
.ba-item-cs:last-child { border-bottom:none; }

.ba-item-label-cs {
  font-family:'Space Grotesk',sans-serif;
  font-size:9px; font-weight:600;
  letter-spacing:.15em; text-transform:uppercase;
  color:var(--muted);
}

.ba-item-val-cs {
  font-family:'Fraunces',serif;
  font-size:17px; font-weight:700;
}
.ba-side--before-cs .ba-item-val-cs { color:var(--muted); }
.exec-cs .ba-side--after-cs .ba-item-val-cs { color:var(--amber); }
.ely-cs  .ba-side--after-cs .ba-item-val-cs { color:var(--rose); }

.ba-arrow-col-cs {
  width:72px; display:flex; align-items:center; justify-content:center;
}
.ba-arrow-circle-cs {
  width:48px; height:48px; border-radius:50%;
  background:var(--gold); color:var(--void);
  display:flex; align-items:center; justify-content:center;
  font-size:20px; font-weight:700;
  box-shadow:0 0 32px rgba(201,168,76,.3);
  flex-shrink:0;
}

/* ── VIDEO PROOF ── */
.video-row-cs {
  padding:72px 0;
  border-bottom:1px solid var(--border);
}

.video-eyebrow-cs {
  font-family:'Space Grotesk',sans-serif;
  font-size:9px; font-weight:700;
  letter-spacing:.3em; text-transform:uppercase;
  margin-bottom:32px;
}
.exec-cs .video-eyebrow-cs { color:var(--amber); }
.ely-cs  .video-eyebrow-cs { color:var(--rose); }

.video-grid-cs {
  display:grid;
  grid-template-columns:1fr 1fr 1fr;
  gap:14px;
}

.vcard-cs {
  position:relative; overflow:hidden;
  aspect-ratio:9/16;
  background:var(--surface);
  border:1px solid var(--border);
  cursor:pointer;
  transition:border-color .3s, transform .3s;
}
.exec-cs .vcard-cs:hover { border-color:var(--amber); transform:scale(1.01); }
.ely-cs  .vcard-cs:hover { border-color:var(--rose);  transform:scale(1.01); }

.vcard-cs video {
  position:absolute; inset:0;
  width:100%; height:100%;
  object-fit:cover;
}

.vcard-shade-cs {
  position:absolute; inset:0;
  background:linear-gradient(to top, rgba(6,6,8,.85) 0%, rgba(6,6,8,.1) 50%, transparent 100%);
  z-index:1; pointer-events:none;
}

.vcard-play-cs {
  position:absolute; top:50%; left:50%;
  transform:translate(-50%,-50%);
  width:56px; height:56px; border-radius:50%;
  background:rgba(255,255,255,.12);
  backdrop-filter:blur(12px);
  border:1.5px solid rgba(255,255,255,.35);
  display:flex; align-items:center; justify-content:center;
  z-index:2; transition:all .3s; pointer-events:none;
}
.vcard-cs:hover .vcard-play-cs { background:rgba(255,255,255,.22); transform:translate(-50%,-50%) scale(1.1); }
.vcard-cs.playing .vcard-play-cs { opacity:0; }

.play-tri-cs {
  width:0; height:0;
  border-top:9px solid transparent;
  border-bottom:9px solid transparent;
  border-left:15px solid white;
  margin-left:4px;
}

.vcard-info-cs {
  position:absolute; bottom:18px; left:18px; right:18px;
  z-index:3;
}
.vcard-title-cs { font-size:12px; font-weight:600; color:var(--white); margin-bottom:3px; }
.vcard-sub-cs {
  font-family:'Space Grotesk',sans-serif;
  font-size:8px; font-weight:600; letter-spacing:.15em; text-transform:uppercase;
  color:rgba(255,255,255,.45);
}

/* stat card (3rd slot) */
.vcard-stat-cs {
  position:absolute; inset:0; z-index:2;
  padding:36px 32px;
  display:flex; flex-direction:column; justify-content:space-between;
  cursor:default;
}
.vs-top-cs {
  font-family:'Space Grotesk',sans-serif;
  font-size:8px; font-weight:700;
  letter-spacing:.25em; text-transform:uppercase;
}
.exec-cs .vs-top-cs { color:var(--amber); }
.ely-cs  .vs-top-cs { color:var(--rose); }

.vs-rows-cs { display:flex; flex-direction:column; gap:20px; }
.vs-big-cs {
  font-family:'Fraunces',serif;
  font-size:42px; font-weight:700;
  line-height:1;
}
.exec-cs .vs-big-cs { color:var(--amber); }
.ely-cs  .vs-big-cs { color:var(--rose); }
.vs-label-cs { font-size:11px; color:var(--muted); margin-top:3px; }

/* ── QUOTE ── */
.quote-row-cs { padding:72px 0; }

.quote-box-cs {
  padding:56px 60px;
  border:1px solid var(--border);
  position:relative; overflow:hidden;
}
.exec-cs .quote-box-cs { border-left:3px solid var(--amber); }
.ely-cs  .quote-box-cs { border-left:3px solid var(--rose); }

.qmark-cs {
  font-family:'Fraunces',serif;
  font-size:120px; font-weight:900;
  position:absolute; top:20px; left:44px;
  opacity:.04; line-height:1; color:var(--white);
  pointer-events:none;
}

.q-text-cs {
  font-family:'Fraunces',serif;
  font-size:clamp(17px,2vw,24px);
  font-style:italic; font-weight:300;
  line-height:1.65; color:var(--light);
  max-width:780px; margin-bottom:28px;
  position:relative; z-index:2;
}

.q-attr-cs {
  font-family:'Space Grotesk',sans-serif;
  font-size:9px; font-weight:600;
  letter-spacing:.2em; text-transform:uppercase;
  color:var(--muted);
}
.exec-cs .q-attr-cs strong { color:var(--amber); }
.ely-cs  .q-attr-cs strong { color:var(--rose); }

/* ── AGENCY CLOSE ── */
.agency-close-cs {
  padding:120px 72px;
  max-width:1360px; margin:0 auto;
}

.ac-eyebrow-cs {
  font-family:'Space Grotesk',sans-serif;
  font-size:9px; font-weight:700;
  letter-spacing:.3em; text-transform:uppercase;
  color:var(--gold); margin-bottom:20px;
  display:flex; align-items:center; gap:16px;
}
.ac-eyebrow-cs::after { content:''; flex:0 0 36px; height:1px; background:var(--gold); }

.ac-h2-cs {
  font-family:'Fraunces',serif;
  font-size:clamp(36px,4.5vw,64px);
  font-weight:700; line-height:1.05;
  letter-spacing:-.025em; color:var(--white);
  margin-bottom:20px;
}
.ac-h2-cs em { color:var(--gold); font-style:italic; }

.ac-sub-cs {
  font-size:15px; line-height:1.85; color:var(--smoke);
  max-width:580px; margin-bottom:60px;
}

.ac-grid-cs {
  display:grid; grid-template-columns:repeat(3,1fr);
  gap:1px; background:var(--border);
  border:1px solid var(--border);
}

.ac-cell-cs {
  padding:44px 40px;
  background:var(--ink);
  transition:background .3s;
}
.ac-cell-cs:hover { background:var(--surface); }

.ac-cell-num-cs {
  font-family:'Fraunces',serif;
  font-size:52px; font-weight:700;
  color:var(--gold); line-height:1; margin-bottom:12px;
}
.ac-cell-title-cs {
  font-size:13px; font-weight:600;
  color:var(--light); margin-bottom:10px;
}
.ac-cell-text-cs {
  font-size:12.5px; line-height:1.85; color:var(--smoke);
}

/* ── CTA ── */
.cta-shell-cs {
  width:100%; position:relative;
  background:var(--white);
  padding:140px 72px;
  text-align:center;
  overflow:hidden;
}

.cta-deco-cs {
  position:absolute; top:0; left:50%; transform:translateX(-50%);
  width:600px; height:4px;
  background:linear-gradient(to right, transparent, var(--gold), transparent);
}

.cta-eyebrow-cs {
  font-family:'Space Grotesk',sans-serif;
  font-size:9px; font-weight:700;
  letter-spacing:.35em; text-transform:uppercase;
  color:var(--muted); margin-bottom:28px;
  display:block;
}

.cta-h2-cs {
  font-family:'Fraunces',serif;
  font-size:clamp(48px,7vw,96px);
  font-weight:900; line-height:.92;
  letter-spacing:-.035em; color:var(--void);
  margin-bottom:24px;
}
.cta-h2-cs em { color:var(--gold); font-style:italic; }

.cta-p-cs {
  font-size:16px; line-height:1.8; color:#666;
  max-width:500px; margin:0 auto 52px;
}

.cta-btn-wrap-cs { display:flex; flex-direction:column; align-items:center; gap:16px; }

.btn-cta-cs {
  display:inline-flex; align-items:center; gap:10px;
  font-family:'Space Grotesk',sans-serif;
  font-size:12px; font-weight:700;
  letter-spacing:.15em; text-transform:uppercase;
  color:var(--white); background:var(--void);
  padding:20px 56px; text-decoration:none;
  transition:all .3s;
}
.btn-cta-cs:hover {
  background:var(--gold); color:var(--void);
  transform:translateY(-3px);
  box-shadow:0 14px 48px rgba(201,168,76,.35);
}

.btn-ghost-cs {
  font-family:'Space Grotesk',sans-serif;
  font-size:10px; font-weight:600;
  letter-spacing:.15em; text-transform:uppercase;
  color:#999; text-decoration:none; transition:color .2s;
}
.btn-ghost-cs:hover { color:var(--void); }

.cta-pillars-cs {
  display:flex; justify-content:center;
  align-items:center; gap:0;
  margin-top:72px;
  border-top:1px solid #e8e8e8;
  border-bottom:1px solid #e8e8e8;
}

.pillar-cs {
  padding:32px 48px; text-align:center;
  border-right:1px solid #e8e8e8;
  flex:1;
}
.pillar-cs:last-child { border-right:none; }

.pillar-num-cs {
  font-family:'Fraunces',serif;
  font-size:32px; font-weight:700;
  color:var(--gold); display:block; margin-bottom:5px;
}
.pillar-label-cs {
  font-family:'Space Grotesk',sans-serif;
  font-size:8px; font-weight:700;
  letter-spacing:.25em; text-transform:uppercase;
  color:#aaa;
}

/* ── FOOTER ── */
.footer-cs {
  padding:36px 72px;
  display:flex; justify-content:space-between; align-items:center;
  border-top:1px solid var(--border);
  background: var(--void);
}

.foot-logo-cs {
  font-family:'Fraunces',serif;
  font-size:15px; font-weight:700;
  color:var(--white);
}
.foot-logo-cs i { color:var(--gold); font-style:italic; }

.foot-links-cs { display:flex; gap:28px; }
.foot-link-cs {
  font-family:'Space Grotesk',sans-serif;
  font-size:9px; font-weight:600;
  letter-spacing:.15em; text-transform:uppercase;
  color:var(--muted); text-decoration:none; transition:color .2s;
}
.foot-link-cs:hover { color:var(--white); }

.foot-right-cs {
  font-family:'Space Grotesk',sans-serif;
  font-size:9px; font-weight:600;
  letter-spacing:.15em; text-transform:uppercase;
  color:var(--muted);
}

/* ── SCROLL REVEAL ── */
.r-cs { opacity:0; transform:translateY(28px); transition:opacity .75s ease, transform .75s ease; }
.r-cs.v-cs { opacity:1; transform:translateY(0); }
.r-cs.d1-cs { transition-delay:.1s; }
.r-cs.d2-cs { transition-delay:.2s; }
.r-cs.d3-cs { transition-delay:.3s; }
.r-cs.d4-cs { transition-delay:.4s; }

/* ── KEYFRAMES ── */
@keyframes up-cs   { from{opacity:0;transform:translateY(36px)} to{opacity:1;transform:translateY(0)} }
@keyframes fade-cs { from{opacity:0} to{opacity:1} }

/* ── RESPONSIVE ── */
@media(max-width:1100px){
  .hero-cs{ grid-template-columns:1fr; }
  .hero-right-cs{ display:none; }
  .hero-left-cs{ padding:100px 40px 80px; }
  .case-head-cs{ grid-template-columns:1fr; gap:40px; }
  .metrics-strip-cs{ grid-template-columns:repeat(3,1fr); }
  .two-col-cs{ grid-template-columns:1fr; gap:40px; }
  .ba-grid-cs{ grid-template-columns:1fr; }
  .ba-arrow-col-cs{ display:none; }
  .ba-side--after-cs{ border-left:none; border-top:1px solid var(--border); }
  .video-grid-cs{ grid-template-columns:1fr 1fr; }
  .steps-cs{ grid-template-columns:1fr; }
  .ac-grid-cs{ grid-template-columns:1fr; }
  .stats-banner-cs{ grid-template-columns:repeat(2,1fr); }
  .case-inner-cs{ padding:0 32px; }
  .agency-close-cs{ padding:80px 32px; }
  .cta-pillars-cs{ flex-wrap:wrap; }
  .footer-cs{ flex-direction:column; gap:20px; text-align:center; padding:32px; }
}
@media(max-width:680px){
  .metrics-strip-cs{ grid-template-columns:1fr 1fr; }
  .video-grid-cs{ grid-template-columns:1fr; }
  .hero-proof-cs{ flex-wrap:wrap; gap:28px; }
  .nav-cs{ padding:0 24px; }
  .nav-link-cs{ display:none; }
  .cta-shell-cs{ padding:80px 28px; }
}
</style>

<div class="case-study-body">

<!-- ═══ NAV ═══ -->
<nav class="nav-cs">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo-cs f-display">Echo<i>broad</i></a>
  <div class="nav-right-cs">
    <a href="#execuluxe" class="nav-link-cs">Execuluxe</a>
    <a href="#elysian" class="nav-link-cs">Elysian</a>
    <a href="#consultation" class="btn-primary-cs">Book a Consultation</a>
  </div>
</nav>

<!-- ═══ HERO ═══ -->
<section class="hero-cs">
  <div class="hero-glow-cs"></div>

  <div class="hero-left-cs">
    <div class="hero-eyebrow-cs"><span></span>Meta Ads Case Study · Verified Results</div>
    <h1 class="hero-h1-cs">Real Spend.<br><em>Real Revenue.</em><br>Zero Guessing.</h1>
    <p class="hero-p-cs f-body">Inside two live campaigns Echobroad ran for luxury brands on Facebook and Instagram — with the actual numbers from Meta Ads Manager to back every claim.</p>
    <div class="hero-proof-cs">
      <div class="hero-proof-item-cs">
        <div class="hero-proof-num-cs f-display">$227K</div>
        <div class="hero-proof-label-cs f-ui">Revenue Generated</div>
      </div>
      <div class="hero-proof-item-cs">
        <div class="hero-proof-num-cs f-display">601</div>
        <div class="hero-proof-label-cs f-ui">Total Purchases</div>
      </div>
      <div class="hero-proof-item-cs">
        <div class="hero-proof-num-cs f-display">3.04×</div>
        <div class="hero-proof-label-cs f-ui">Blended ROAS</div>
      </div>
    </div>
  </div>

  <div class="hero-right-cs">
    <div class="hero-brand-tile-cs">
      <div class="tile-bg-cs" style="background-image:url('https://execuluxe.com/cdn/shop/files/IMG_1340.jpg')"></div>
      <div class="tile-gradient-cs tile-gradient--exec-cs"></div>
      <div class="tile-content-cs">
        <div class="tile-chip-cs tile-chip--exec-cs"><div class="tile-dot-cs"></div>Case 01 · Luxury Accessories</div>
        <div class="tile-name-cs f-display">EXECULUXE</div>
      </div>
    </div>
    <div class="hero-brand-tile-cs">
      <div class="tile-bg-cs" style="background-image:url('https://elysianparfum.com/cdn/shop/files/lavender.jpg')"></div>
      <div class="tile-gradient-cs tile-gradient--ely-cs"></div>
      <div class="tile-content-cs">
        <div class="tile-chip-cs tile-chip--ely-cs"><div class="tile-dot-cs"></div>Case 02 · Artisan Fragrance</div>
        <div class="tile-name-cs f-display">ELYSIAN PARFUM</div>
      </div>
    </div>
  </div>
</section>

<!-- ═══ COMBINED STATS ═══ -->
<div class="stats-banner-cs r-cs">
  <div class="stat-cell-cs">
    <div class="stat-label-cs f-ui">Combined Ad Spend</div>
    <div class="stat-num-cs f-display" data-count="74921" data-prefix="$">$74,921</div>
    <div class="stat-sub-cs f-ui">Across both campaigns</div>
  </div>
  <div class="stat-cell-cs">
    <div class="stat-label-cs f-ui">Total Revenue Generated</div>
    <div class="stat-num-cs f-display" data-count="227729" data-prefix="$">$227,729</div>
    <div class="stat-sub-cs f-ui">Attributed to Meta ads</div>
  </div>
  <div class="stat-cell-cs">
    <div class="stat-label-cs f-ui">Total Purchases</div>
    <div class="stat-num-cs f-display" data-count="601">601</div>
    <div class="stat-sub-cs f-ui">Real buyers, real orders</div>
  </div>
  <div class="stat-cell-cs">
    <div class="stat-label-cs f-ui">Blended ROAS</div>
    <div class="stat-num-cs f-display" data-count="3.04" data-suffix="×">3.04×</div>
    <div class="stat-sub-cs f-ui">Return on total spend</div>
  </div>
</div>

<!-- CASE 01 — EXECULUXE -->
<div id="execuluxe" class="case-shell-cs case-shell--exec-cs exec-cs">
<div class="case-inner-cs">
  <div class="case-head-cs r-cs">
    <div class="bg-num-cs">01</div>
    <div>
      <div class="case-chip-cs f-ui">Case Study 01 · Luxury Vegan Accessories · USA</div>
      <div class="case-name-cs f-display">Execuluxe</div>
      <div class="case-tagline-cs f-display">The rollerbrief built for the woman who doesn't slow down.</div>
      <p class="case-desc-cs f-body">
        A Florida-based luxury brand making the only vegan leather rollerbrief that converts from structured tote to wheeled carry-on in seconds.
        Crafted for professional women who refuse to choose between style and function.
        <strong>Product price: $999. </strong>High-consideration, high-stakes advertising — every click had to count.
      </p>
    </div>
    <div class="case-meta-cs">
      <div class="case-meta-row-cs">
        <div class="cm-key-cs f-ui">Platform</div>
        <div class="cm-val-cs f-body">Facebook &amp; Instagram (Meta)</div>
      </div>
      <div class="case-meta-row-cs">
        <div class="cm-key-cs f-ui">Campaign Duration</div>
        <div class="cm-val-cs f-body">Multi-month · Dec 2023</div>
      </div>
      <div class="case-meta-row-cs">
        <div class="cm-key-cs f-ui">Product Price</div>
        <div class="cm-val-cs f-body">$999 per Rollerbrief</div>
      </div>
      <div class="case-meta-row-cs">
        <div class="cm-key-cs f-ui">Target Audience</div>
        <div class="cm-val-cs f-body">Professional Women · USA · Ages 28–52</div>
      </div>
      <div class="case-meta-row-cs">
        <div class="cm-key-cs f-ui">Campaign Goal</div>
        <div class="cm-val-cs f-body">Website Purchases &amp; Brand Awareness</div>
      </div>
    </div>
  </div>

  <div class="metrics-strip-cs r-cs">
    <div class="mc-cs">
      <div class="mc-key-cs f-ui">Total Ad Spend</div>
      <div class="mc-val-cs f-display">$51,785</div>
      <div class="mc-note-cs f-body">Verified from Meta Ads Manager</div>
    </div>
    <div class="mc-cs">
      <div class="mc-key-cs f-ui">Website Purchases</div>
      <div class="mc-val-cs f-display">152</div>
      <div class="mc-note-cs f-body">Confirmed website conversions</div>
    </div>
    <div class="mc-cs">
      <div class="mc-key-cs f-ui">Revenue Generated</div>
      <div class="mc-val-cs f-display">$151,848</div>
      <div class="mc-note-cs f-body">152 × $999 avg. product price</div>
    </div>
    <div class="mc-cs">
      <div class="mc-key-cs f-ui">ROAS</div>
      <div class="mc-val-cs f-display">2.93×</div>
      <div class="mc-note-cs f-body">$151,848 ÷ $51,785</div>
    </div>
    <div class="mc-cs">
      <div class="mc-key-cs f-ui">Avg. Cost per Purchase</div>
      <div class="mc-val-cs f-display">$268</div>
      <div class="mc-note-cs f-body">On a $999 product — strong CPA</div>
    </div>
  </div>

  <div class="two-col-cs r-cs">
    <div>
      <div class="col-eyebrow-cs f-ui">The Challenge</div>
      <h3 class="col-h3-cs f-display">Selling a $999 bag to a stranger on social media</h3>
      <p class="col-p-cs f-body">A near-$1,000 product demands trust before it demands a purchase. Cold traffic on Meta won't simply buy — they need to be shown, convinced, and retargeted with precision before opening their wallets.</p>
      <p class="col-p-cs f-body">Execuluxe had the product, the reviews, and the brand story. What they lacked was a <strong>structured paid media system</strong> — no consistent ad spend, no funnel architecture, no video creative built to stop the scroll and drive clicks on a luxury price point.</p>
      <p class="col-p-cs f-body">The brief: build it from scratch, make it profitable, and prove it at scale.</p>
    </div>
    <div>
      <div class="col-eyebrow-cs f-ui">The Echobroad Strategy</div>
      <h3 class="col-h3-cs f-display">Product-led video + layered audience targeting</h3>
      <ul class="check-list-cs f-body">
        <li><strong>Hero video creative</strong> leading with the bag's signature transformation — tote to rollerbrief — designed to hook within the first 2 seconds of a Reel</li>
        <li><strong>Pain-point copywriting:</strong> targeted the frustration of heavy bags, chaotic travel, and being forced to sacrifice elegance for function</li>
        <li><strong>Cold interest stacks</strong> combining executive women, business travel, luxury fashion, and female entrepreneurs across the USA</li>
        <li><strong>Warm retargeting</strong> re-engaged video viewers (50%+ watch) and product page visitors with social proof and urgency</li>
        <li><strong>Q4 gifting season</strong> timing maximised purchase intent — self-gifting professionals and partners buying high-value gifts</li>
      </ul>
    </div>
  </div>

  <div class="strategy-row-cs r-cs">
    <div class="strategy-eyebrow-cs f-ui">3-Phase Funnel Architecture</div>
    <div class="steps-cs">
      <div class="step-cs">
        <div class="step-n-cs f-display">01</div>
        <div class="step-title-cs f-body">Awareness — Stop the Scroll</div>
        <div class="step-text-cs f-body">Short-form Reels and Stories targeting broad interest audiences of professional US women. Creative led with the bag transformation. KPI: 3-second view rate, video completion, CPM efficiency.</div>
      </div>
      <div class="step-cs">
        <div class="step-n-cs f-display">02</div>
        <div class="step-title-cs f-body">Consideration — Build Desire</div>
        <div class="step-text-cs f-body">Retargeted warm audiences — video viewers and website visitors — with customer reviews, unboxing content, and lifestyle creatives. Pushed traffic to the product page with feature-focused messaging.</div>
      </div>
      <div class="step-cs">
        <div class="step-n-cs f-display">03</div>
        <div class="step-title-cs f-body">Conversion — Close the Sale</div>
        <div class="step-text-cs f-body">Tight retargeting on cart abandoners and product page visitors. Urgency-led messaging around holiday shipping deadlines and bundle offers. Direct-to-checkout CTAs. Lowest CPA, highest intent audience.</div>
      </div>
    </div>
  </div>

  <div class="ba-row-cs r-cs">
    <div class="ba-eyebrow-cs f-ui">Before &amp; After · The Echobroad Effect</div>
    <div class="ba-grid-cs">
      <div class="ba-side-cs ba-side--before-cs">
        <div class="ba-side-label-cs f-ui"><div class="ba-dot-cs"></div>Before Echobroad</div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">Monthly Ad Spend</span><span class="ba-item-val-cs f-display">$0</span></div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">Paid Purchases</span><span class="ba-item-val-cs f-display">0 units</span></div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">Revenue from Ads</span><span class="ba-item-val-cs f-display">$0</span></div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">ROAS</span><span class="ba-item-val-cs f-display">N/A</span></div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">Retargeting Funnel</span><span class="ba-item-val-cs f-display">None</span></div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">Brand Reach</span><span class="ba-item-val-cs f-display">Organic Only</span></div>
      </div>
      <div class="ba-arrow-col-cs"><div class="ba-arrow-circle-cs">→</div></div>
      <div class="ba-side-cs ba-side--after-cs">
        <div class="ba-side-label-cs f-ui"><div class="ba-dot-cs"></div>After Echobroad Campaign</div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">Total Ad Spend</span><span class="ba-item-val-cs f-display">$51,785</span></div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">Paid Purchases</span><span class="ba-item-val-cs f-display">152 units</span></div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">Revenue from Ads</span><span class="ba-item-val-cs f-display">$151,848</span></div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">ROAS</span><span class="ba-item-val-cs f-display">2.93×</span></div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">Retargeting Funnel</span><span class="ba-item-val-cs f-display">Fully Built</span></div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">Avg. Cost per Purchase</span><span class="ba-item-val-cs f-display">$268.13</span></div>
      </div>
    </div>
  </div>

  <div class="video-row-cs r-cs">
    <div class="video-eyebrow-cs f-ui">Live Ad Creative Proof — Execuluxe Campaign</div>
    <div class="video-grid-cs">
      <div class="vcard-cs exec-cs" onclick="playVid(this)">
        <video src="https://files.manuscdn.com/user_upload_by_module/session_file/310519663207493210/yQQkVinUjETfVsEZ.mp4" loop muted playsinline preload="metadata"></video>
        <div class="vcard-shade-cs"></div>
        <div class="vcard-play-cs"><div class="play-tri-cs"></div></div>
        <div class="vcard-info-cs">
          <div class="vcard-title-cs f-body">Rollerbrief Demo — Hero Creative</div>
          <div class="vcard-sub-cs f-ui">Execuluxe · Facebook &amp; Instagram Reel</div>
        </div>
      </div>
      <div class="vcard-cs exec-cs" onclick="playVid(this)">
        <video src="https://files.manuscdn.com/user_upload_by_module/session_file/310519663207493210/yQQkVinUjETfVsEZ.mp4" loop muted playsinline preload="metadata"></video>
        <div class="vcard-shade-cs"></div>
        <div class="vcard-play-cs"><div class="play-tri-cs"></div></div>
        <div class="vcard-info-cs">
          <div class="vcard-title-cs f-body">Lifestyle Ad — Screen Reel</div>
          <div class="vcard-sub-cs f-ui">Execuluxe · Instagram Story</div>
        </div>
      </div>
      <div class="vcard-cs exec-cs" style="cursor:default;">
        <div class="vcard-shade-cs" style="background:rgba(6,6,8,0.88)"></div>
        <div class="vcard-stat-cs">
          <div class="vs-top-cs f-ui">Verified Campaign Results</div>
          <div class="vs-rows-cs">
            <div class="vs-row-cs">
              <div class="vs-big-cs f-display">$51,785</div>
              <div class="vs-label-cs f-body">Total Ad Spend</div>
            </div>
            <div class="vs-row-cs">
              <div class="vs-big-cs f-display">152</div>
              <div class="vs-label-cs f-body">Website Purchases</div>
            </div>
            <div class="vs-row-cs">
              <div class="vs-big-cs f-display">2.93×</div>
              <div class="vs-label-cs f-body">Return on Ad Spend</div>
            </div>
            <div class="vs-row-cs">
              <div class="vs-big-cs f-display">$151,848</div>
              <div class="vs-label-cs f-body">Revenue Generated</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="quote-row-cs r-cs">
    <div class="quote-box-cs">
      <div class="qmark-cs f-display">"</div>
      <p class="q-text-cs f-display">"Selling a $999 bag on Meta isn't about reach — it's about relevance. We built a funnel that found exactly the right women, showed them exactly the right creative, and retargeted until the sale was inevitable. 152 purchases at $268 CPA on a $999 product is the proof."</p>
      <div class="q-attr-cs f-ui">— Echobroad Agency · <strong>Execuluxe Campaign Strategy</strong></div>
    </div>
  </div>
</div>
</div>

<!-- CASE 02 — ELYSIAN PARFUM -->
<div id="elysian" class="case-shell-cs case-shell--ely-cs ely-cs">
<div class="case-inner-cs">
  <div class="case-head-cs r-cs">
    <div class="bg-num-cs">02</div>
    <div>
      <div class="case-chip-cs f-ui">Case Study 02 · Artisan Fragrance House · USA</div>
      <div class="case-name-cs f-display">Elysian Parfum</div>
      <div class="case-tagline-cs f-display">Award-winning fragrances handcrafted in Atlanta, Georgia.</div>
      <p class="case-desc-cs f-body">
        Every bottle is hand-filled, bottled, and shipped in-house.
        <strong>Product price: $169. </strong>A brand built on emotion — and our ads had to make people <em>feel</em> a scent they couldn't smell.
      </p>
    </div>
    <div class="case-meta-cs">
      <div class="case-meta-row-cs">
        <div class="cm-key-cs f-ui">Platform</div>
        <div class="cm-val-cs f-body">Facebook &amp; Instagram (Meta)</div>
      </div>
      <div class="case-meta-row-cs">
        <div class="cm-key-cs f-ui">Campaign Duration</div>
        <div class="cm-val-cs f-body">Multi-month · Dec 2023</div>
      </div>
      <div class="case-meta-row-cs">
        <div class="cm-key-cs f-ui">Product Price</div>
        <div class="cm-val-cs f-body">$169 per Full Bottle</div>
      </div>
      <div class="case-meta-row-cs">
        <div class="cm-key-cs f-ui">Target Audience</div>
        <div class="cm-val-cs f-body">Fragrance Enthusiasts · USA · Ages 22–48</div>
      </div>
      <div class="case-meta-row-cs">
        <div class="cm-key-cs f-ui">Campaign Goal</div>
        <div class="cm-val-cs f-body">Website Purchases &amp; New Customer Acquisition</div>
      </div>
    </div>
  </div>

  <div class="metrics-strip-cs r-cs">
    <div class="mc-cs">
      <div class="mc-key-cs f-ui">Total Ad Spend</div>
      <div class="mc-val-cs f-display">$23,136</div>
      <div class="mc-note-cs f-body">Verified from Meta Ads Manager</div>
    </div>
    <div class="mc-cs">
      <div class="mc-key-cs f-ui">Website Purchases</div>
      <div class="mc-val-cs f-display">449</div>
      <div class="mc-note-cs f-body">Confirmed website conversions</div>
    </div>
    <div class="mc-cs">
      <div class="mc-key-cs f-ui">Revenue Generated</div>
      <div class="mc-val-cs f-display">$75,881</div>
      <div class="mc-note-cs f-body">449 × $169 avg. product price</div>
    </div>
    <div class="mc-cs">
      <div class="mc-key-cs f-ui">ROAS</div>
      <div class="mc-val-cs f-display">3.28×</div>
      <div class="mc-note-cs f-body">$75,881 ÷ $23,136</div>
    </div>
    <div class="mc-cs">
      <div class="mc-key-cs f-ui">Avg. Cost per Purchase</div>
      <div class="mc-val-cs f-display">$46.50</div>
      <div class="mc-note-cs f-body">Exceptional CPA on $169 product</div>
    </div>
  </div>

  <div class="two-col-cs r-cs">
    <div>
      <div class="col-eyebrow-cs f-ui">The Challenge</div>
      <h3 class="col-h3-cs f-display">You can't smell an ad. So we made people feel it.</h3>
      <p class="col-p-cs f-body">Fragrance is the most sensory-dependent product category in retail. You cannot demo a scent on Meta. Conversion lives entirely in <strong>emotional storytelling</strong> and the power of your creative to create desire without the primary sense.</p>
      <p class="col-p-cs f-body">Elysian had built genuine product love organically — an award-winning product, glowing reviews, and a deeply personal brand story. But their reach was limited to whoever stumbled upon them.</p>
      <p class="col-p-cs f-body">The mission: scale new customer acquisition on Meta while preserving the brand's intimate, artisan soul — and do it at a cost that made the numbers work.</p>
    </div>
    <div>
      <div class="col-eyebrow-cs f-ui">The Echobroad Strategy</div>
      <h3 class="col-h3-cs f-display">Sensory storytelling + award credibility + volume efficiency</h3>
      <ul class="check-list-cs f-body">
        <li><strong>"Best New Fragrance 2024"</strong> — leading every cold-traffic ad with the award hook gave an indie brand instant third-party credibility in the first 2 seconds</li>
        <li><strong>Sensory visual language:</strong> close-up bottle shots, liquid pour, atmospheric candlelight — if you can't smell it, make every frame make you want to</li>
        <li><strong>UGC-style creative</strong> leveraged real customer voices and authentic reviews to build trust with audiences unfamiliar with the brand</li>
        <li><strong>Interest targeting</strong> into niche fragrance communities, luxury beauty, indie perfume lovers, and gifting audiences during Q4</li>
        <li><strong>Retargeting upsell loop</strong> — visitors who sampled discovery sets were re-engaged with full-bottle creatives to compound LTV</li>
      </ul>
    </div>
  </div>

  <div class="strategy-row-cs r-cs">
    <div class="strategy-eyebrow-cs f-ui">3-Phase Funnel Architecture</div>
    <div class="steps-cs">
      <div class="step-cs">
        <div class="step-n-cs f-display">01</div>
        <div class="step-title-cs f-body">Hook — Lead with the Award</div>
        <div class="step-text-cs f-body">Every cold-traffic ad opened with "Best New Fragrance 2024" — an instant trust signal for a brand the audience had never heard of. Targeting: niche fragrance enthusiasts, luxury beauty, indie perfume communities, USA, 22–48.</div>
      </div>
      <div class="step-cs">
        <div class="step-n-cs f-display">02</div>
        <div class="step-title-cs f-body">Volume — Maximise Purchases</div>
        <div class="step-text-cs f-body">At $169 per bottle, the price was premium but accessible. Creatives showed product beauty, customer reviews, and the brand story. The $46.50 CPA was achieved by targeting high-intent fragrance buyers who needed little convincing once shown the right creative.</div>
      </div>
      <div class="step-cs">
        <div class="step-n-cs f-display">03</div>
        <div class="step-title-cs f-body">Scale — Compound LTV</div>
        <div class="step-text-cs f-body">Past buyers and warm audiences were retargeted with new scent launches and collection ads. Every new purchase added to the pool. The 449 purchases weren't just conversions — they were the foundation of a long-term repeat customer base.</div>
      </div>
    </div>
  </div>

  <div class="ba-row-cs r-cs">
    <div class="ba-eyebrow-cs f-ui">Before &amp; After · The Echobroad Effect</div>
    <div class="ba-grid-cs">
      <div class="ba-side-cs ba-side--before-cs">
        <div class="ba-side-label-cs f-ui"><div class="ba-dot-cs"></div>Before Echobroad</div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">Monthly Ad Spend</span><span class="ba-item-val-cs f-display">$0</span></div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">Paid Purchases</span><span class="ba-item-val-cs f-display">0 units</span></div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">Revenue from Ads</span><span class="ba-item-val-cs f-display">$0</span></div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">ROAS</span><span class="ba-item-val-cs f-display">N/A</span></div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">Paid Customer Reach</span><span class="ba-item-val-cs f-display">Organic Only</span></div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">Cost per Purchase</span><span class="ba-item-val-cs f-display">N/A</span></div>
      </div>
      <div class="ba-arrow-col-cs"><div class="ba-arrow-circle-cs">→</div></div>
      <div class="ba-side-cs ba-side--after-cs">
        <div class="ba-side-label-cs f-ui"><div class="ba-dot-cs"></div>After Echobroad Campaign</div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">Total Ad Spend</span><span class="ba-item-val-cs f-display">$23,136</span></div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">Paid Purchases</span><span class="ba-item-val-cs f-display">449 units</span></div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">Revenue from Ads</span><span class="ba-item-val-cs f-display">$75,881</span></div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">ROAS</span><span class="ba-item-val-cs f-display">3.28×</span></div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">New Customers Reached</span><span class="ba-item-val-cs f-display">449 buyers</span></div>
        <div class="ba-item-cs"><span class="ba-item-label-cs f-ui">Cost per Purchase</span><span class="ba-item-val-cs f-display">$46.50</span></div>
      </div>
    </div>
  </div>

  <div class="video-row-cs r-cs">
    <div class="video-eyebrow-cs f-ui">Live Ad Creative Proof — Elysian Parfum Campaign</div>
    <div class="video-grid-cs">
      <div class="vcard-cs ely-cs" onclick="playVid(this)">
        <video src="https://files.manuscdn.com/user_upload_by_module/session_file/310519663207493210/xBCuRQSHsdVOhwHN.mp4" loop muted playsinline preload="metadata"></video>
        <div class="vcard-shade-cs"></div>
        <div class="vcard-play-cs"><div class="play-tri-cs"></div></div>
        <div class="vcard-info-cs">
          <div class="vcard-title-cs f-body">UGC Ad — Hedonism Scent</div>
          <div class="vcard-sub-cs f-ui">Elysian Parfum · Instagram Reel</div>
        </div>
      </div>
      <div class="vcard-cs ely-cs" onclick="playVid(this)">
        <video src="https://files.manuscdn.com/user_upload_by_module/session_file/310519663207493210/xBCuRQSHsdVOhwHN.mp4" loop muted playsinline preload="metadata"></video>
        <div class="vcard-shade-cs"></div>
        <div class="vcard-play-cs"><div class="play-tri-cs"></div></div>
        <div class="vcard-info-cs">
          <div class="vcard-title-cs f-body">Brand Reel — Sensory Creative</div>
          <div class="vcard-sub-cs f-ui">Elysian Parfum · Facebook Feed</div>
        </div>
      </div>
      <div class="vcard-cs ely-cs" style="cursor:default;">
        <div class="vcard-shade-cs" style="background:rgba(6,6,8,0.88)"></div>
        <div class="vcard-stat-cs">
          <div class="vs-top-cs f-ui">Verified Campaign Results</div>
          <div class="vs-rows-cs">
            <div class="vs-row-cs">
              <div class="vs-big-cs f-display">$23,136</div>
              <div class="vs-label-cs f-body">Total Ad Spend</div>
            </div>
            <div class="vs-row-cs">
              <div class="vs-big-cs f-display">449</div>
              <div class="vs-label-cs f-body">Website Purchases</div>
            </div>
            <div class="vs-row-cs">
              <div class="vs-big-cs f-display">3.28×</div>
              <div class="vs-label-cs f-body">Return on Ad Spend</div>
            </div>
            <div class="vs-row-cs">
              <div class="vs-big-cs f-display">$46.50</div>
              <div class="vs-label-cs f-body">Cost per Purchase</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="quote-row-cs r-cs">
    <div class="quote-box-cs">
      <div class="qmark-cs f-display">"</div>
      <p class="q-text-cs f-display">"Fragrance advertising lives or dies on emotional resonance. Our creative made audiences feel the scent before they could buy it — and the 449 purchases at a $46.50 CPA on a $169 product proves that when you get the emotion right, the algorithm rewards you."</p>
      <div class="q-attr-cs f-ui">— Echobroad Agency · <strong>Elysian Parfum Campaign Strategy</strong></div>
    </div>
  </div>
</div>
</div>

<!-- ═══ AGENCY CLOSE ═══ -->
<div class="agency-close-cs r-cs">
  <div class="ac-eyebrow-cs f-ui">Why Echobroad</div>
  <h2 class="ac-h2-cs f-display">We win when <em>you win.</em><br>That's the only model.</h2>
  <p class="ac-sub-cs f-body">Based in Port Harcourt, Nigeria — operating globally. Echobroad is a Meta Ads agency that has spent 9+ years building campaigns that don't just look good, but convert. Every decision is data-backed. Every creative is built to perform.</p>
  <div class="ac-grid-cs">
    <div class="ac-cell-cs">
      <div class="ac-cell-num-cs f-display">9+</div>
      <div class="ac-cell-title-cs f-body">Years in Meta Advertising</div>
      <div class="ac-cell-text-cs f-body">Deep platform expertise through every algorithm update, iOS 14.5 fallout, and ad format evolution. We've seen it all — and adapted.</div>
    </div>
    <div class="ac-cell-cs">
      <div class="ac-cell-num-cs f-display">$227K</div>
      <div class="ac-cell-title-cs f-body">Revenue — Just These 2 Brands</div>
      <div class="ac-cell-text-cs f-body">Two campaigns. One agency. Two very different products. Same result: profitable, scalable, verifiable growth from Meta advertising.</div>
    </div>
    <div class="ac-cell-cs">
      <div class="ac-cell-num-cs f-display">3–8×</div>
      <div class="ac-cell-title-cs f-body">Typical ROAS Range</div>
      <div class="ac-cell-text-cs f-body">For e-commerce brands running structured campaigns with Echobroad. We focus on bottom-line profit, not just vanity metrics.</div>
    </div>
  </div>
</div>

<!-- ═══ CTA ═══ -->
<div id="consultation" class="cta-shell-cs">
  <div class="cta-deco-cs"></div>
  <span class="cta-eyebrow-cs f-ui">You've seen the results. Now let's get yours.</span>
  <h2 class="cta-h2-cs f-display">Your Brand<br>Could Be the <em>Next Case Study.</em></h2>
  <p class="cta-p-cs f-body">Book a free strategy call with the Echobroad team. We'll audit your current setup, identify where you're leaving money on the table, and show you exactly how we'd run your Meta ads.</p>
  <div class="cta-btn-wrap-cs">
    <a href="https://www.echobroad.com" target="_blank" class="btn-cta-cs f-ui">
      Book Your Free Consultation →
    </a>
    <a href="https://www.echobroad.com" target="_blank" class="btn-ghost-cs f-ui">or visit echobroad.com to learn more</a>
  </div>
  <div class="cta-pillars-cs">
    <div class="pillar-cs">
      <span class="pillar-num-cs f-display">Free</span>
      <span class="pillar-label-cs f-ui">Strategy Call</span>
    </div>
    <div class="pillar-cs">
      <span class="pillar-num-cs f-display">No</span>
      <span class="pillar-label-cs f-ui">Lock-In Contracts</span>
    </div>
    <div class="pillar-cs">
      <span class="pillar-num-cs f-display">100%</span>
      <span class="pillar-label-cs f-ui">Data-Driven Creative</span>
    </div>
    <div class="pillar-cs">
      <span class="pillar-num-cs f-display">3–8×</span>
      <span class="pillar-label-cs f-ui">Target ROAS Range</span>
    </div>
    <div class="pillar-cs">
      <span class="pillar-num-cs f-display">9+</span>
      <span class="pillar-label-cs f-ui">Years Experience</span>
    </div>
  </div>
</div>

<!-- ═══ FOOTER ═══ -->
<footer class="footer-cs">
  <div class="foot-logo-cs f-display">Echo<i>broad</i> Agency</div>
  <div class="foot-links-cs">
    <a href="https://www.echobroad.com"   target="_blank" class="foot-link-cs f-ui">echobroad.com</a>
    <a href="https://execuluxe.com"       target="_blank" class="foot-link-cs f-ui">execuluxe.com</a>
    <a href="https://elysianparfum.com"   target="_blank" class="foot-link-cs f-ui">elysianparfum.com</a>
    <a href="#consultation"                               class="foot-link-cs f-ui">Book Consultation</a>
  </div>
  <div class="foot-right-cs f-ui">Meta Ads · Port Harcourt, Nigeria</div>
</footer>

</div><!-- /case-study-body -->

<script>
/* ── SCROLL REVEAL ── */
const obs_cs = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) { e.target.classList.add('v-cs'); obs_cs.unobserve(e.target); }
  });
}, { threshold: 0.07, rootMargin:'0px 0px -40px 0px' });
document.querySelectorAll('.r-cs').forEach(el => obs_cs.observe(el));

/* ── COUNTER ANIMATION ── */
function animateNumCS(el) {
  const raw    = el.dataset.count;
  const prefix = el.dataset.prefix || '';
  const suffix = el.dataset.suffix || '';
  const target = parseFloat(raw);
  const isFloat = raw.includes('.');
  const duration = 1800;
  const start = performance.now();

  function tick(now) {
    const progress = Math.min((now - start) / duration, 1);
    const ease = 1 - Math.pow(1 - progress, 4);
    const val = target * ease;
    let display;
    if (isFloat) {
      display = val.toFixed(2);
    } else if (target >= 1000) {
      display = Math.floor(val).toLocaleString('en-US');
    } else {
      display = Math.floor(val);
    }
    el.textContent = prefix + display + suffix;
    if (progress < 1) requestAnimationFrame(tick);
    else el.textContent = prefix + (isFloat ? target.toFixed(2) : target >= 1000 ? target.toLocaleString('en-US') : target) + suffix;
  }
  requestAnimationFrame(tick);
}

const counterObsCS = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting && e.target.dataset.count) {
      animateNumCS(e.target);
      counterObsCS.unobserve(e.target);
    }
  });
}, { threshold: 0.5 });
document.querySelectorAll('[data-count]').forEach(el => counterObsCS.observe(el));

/* ── VIDEO PLAY / PAUSE ── */
function playVid(card) {
  const vid = card.querySelector('video');
  if (!vid) return;
  if (vid.paused) {
    // pause all others
    document.querySelectorAll('.vcard-cs video').forEach(v => {
      if (v !== vid) { v.pause(); v.closest('.vcard-cs').classList.remove('playing'); }
    });
    vid.play();
    card.classList.add('playing');
  } else {
    vid.pause();
    card.classList.remove('playing');
  }
}
</script>

<?php
get_footer();
