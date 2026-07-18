<?php
session_start();
$formFlash = $_SESSION['form_flash'] ?? null;
$formErrors = $_SESSION['form_errors'] ?? [];
$formOld = $_SESSION['form_old'] ?? ['name' => '', 'email' => '', 'message' => ''];
unset($_SESSION['form_flash'], $_SESSION['form_errors'], $_SESSION['form_old']);

$skills = include __DIR__ . '/data/skills.php';
$caseStudies = include __DIR__ . '/data/case-studies.php';
$projects = include __DIR__ . '/data/projects.php';
$organizations = include __DIR__ . '/data/organizations.php';

$siteTitle = 'Pixel Tower Portfolio';
$siteDescription = 'Portofolio digital modern dengan nuansa pixel art Disney Rapunzel, dibangun dengan HTML, Tailwind CSS, dan PHP native.';
?>

<!DOCTYPE html>
<html lang="id">
<?php include __DIR__ . '/includes/header.php'; ?>

<main class="relative">
    <?php include __DIR__ . '/includes/section-hero.php'; ?>
    <?php include __DIR__ . '/includes/section-about.php'; ?>
    <?php include __DIR__ . '/includes/section-skills.php'; ?>
    <?php include __DIR__ . '/includes/section-case-studies.php'; ?>
    <?php include __DIR__ . '/includes/section-projects.php'; ?>
    <?php include __DIR__ . '/includes/section-organization.php'; ?>
    <?php include __DIR__ . '/includes/section-links.php'; ?>
    <?php include __DIR__ . '/includes/section-contact.php'; ?>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</html>
