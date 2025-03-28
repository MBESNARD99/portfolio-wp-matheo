# Portfolio WordPress – Mathéo Besnard

## 🎯 Objectif du projet
Création d’un site vitrine WordPress présentant mon portfolio, mes compétences, ainsi que mes projets réalisés. 

---

## 🔧 Étapes réalisées

1. Initialisation du projet avec Bedrock
2. Création d’un thème enfant basé sur Sydney
3. Création d’un CPT “Portfolio”
4. Ajout de champs personnalisés avec Smart Custom Fields (SCF)
5. Création de templates `front-page.php`, `single-portfolio.php`, `archive-portfolio.php`
6. Mise en page responsive avec CSS
7. Intégration d’SCF pour choisir les meilleures réalisations dynamiquement

---

## 😅 Difficultés rencontrées

- Configuration des permaliens personnalisés avec Bedrock
- Affichage dynamique de la galerie SCF
- Gestion du slug `/portfolio` qui entrait en conflit avec la page d’accueil
- Intégration de SCF sans Composer au départ

---

## 🚀 Installation du projet

### 1. Prérequis
- PHP >= 8.0
- MySQL
- Composer
- XAMPP ou MAMP

### 2. Cloner le repo

```bash
git clone https://github.com/MBESNARD99/portfolio-wp-matheo.git
