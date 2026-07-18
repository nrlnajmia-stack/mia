<section id="contact" class="border-t border-hairline bg-canvas-soft py-24">
    <div class="mx-auto max-w-[1120px] px-4 sm:px-6">
        <div class="mb-12 max-w-2xl">
            <p class="text-sm font-semibold uppercase tracking-[0.18em] text-primary">Kontak</p>
            <h2 class="mt-4 text-4xl font-heading font-semibold text-ink">Kirim pesan untuk peluang kerja atau kolaborasi.</h2>
            <p class="mt-4 text-lg text-body">Isi formulir berikut, dan saya akan membalas secepatnya.</p>
        </div>
        <div class="grid gap-8 lg:grid-cols-[1.3fr_0.9fr]">
            <div class="rounded-[28px] bg-white p-8 shadow-sm border border-hairline">
                <?php if ($formFlash) : ?>
                    <div class="mb-6 rounded-3xl px-5 py-4 text-sm font-semibold <?= $formFlash['type'] === 'success' ? 'bg-success-soft text-success' : 'bg-error-soft text-error' ?>">
                        <?= htmlspecialchars($formFlash['message'], ENT_QUOTES, 'UTF-8') ?>
                    </div>
                <?php endif; ?>
                <form action="contact-process.php" method="POST" class="space-y-6">
                    <input type="text" name="website" class="sr-only" autocomplete="off">
                    <div>
                        <label for="name" class="block text-sm font-semibold text-body">Nama <span class="text-error">*</span></label>
                        <input id="name" name="name" type="text" required value="<?= htmlspecialchars($formOld['name'], ENT_QUOTES, 'UTF-8') ?>" class="mt-2 w-full rounded-2xl border border-hairline bg-canvas px-4 py-3 text-body text-base outline-none focus:border-primary focus:ring-4 focus:ring-primary-soft" placeholder="Nama Anda">
                        <?php if (!empty($formErrors['name'])) : ?>
                            <p class="mt-2 text-sm text-error"><?= htmlspecialchars($formErrors['name'], ENT_QUOTES, 'UTF-8') ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-semibold text-body">Email <span class="text-error">*</span></label>
                        <input id="email" name="email" type="email" required value="<?= htmlspecialchars($formOld['email'], ENT_QUOTES, 'UTF-8') ?>" class="mt-2 w-full rounded-2xl border border-hairline bg-canvas px-4 py-3 text-body text-base outline-none focus:border-primary focus:ring-4 focus:ring-primary-soft" placeholder="nama@email.com">
                        <?php if (!empty($formErrors['email'])) : ?>
                            <p class="mt-2 text-sm text-error"><?= htmlspecialchars($formErrors['email'], ENT_QUOTES, 'UTF-8') ?></p>
                        <?php endif; ?>
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-semibold text-body">Pesan <span class="text-error">*</span></label>
                        <textarea id="message" name="message" rows="5" required class="mt-2 w-full rounded-2xl border border-hairline bg-canvas px-4 py-3 text-body text-base outline-none focus:border-primary focus:ring-4 focus:ring-primary-soft" placeholder="Tulis pesan Anda di sini..."><?= htmlspecialchars($formOld['message'], ENT_QUOTES, 'UTF-8') ?></textarea>
                        <?php if (!empty($formErrors['message'])) : ?>
                            <p class="mt-2 text-sm text-error"><?= htmlspecialchars($formErrors['message'], ENT_QUOTES, 'UTF-8') ?></p>
                        <?php endif; ?>
                    </div>
                    <button type="submit" class="inline-flex items-center justify-center rounded-full bg-primary px-6 py-3 text-sm font-semibold text-on-primary shadow-lg shadow-primary/20 transition hover:bg-primary-deep">Kirim Pesan</button>
                </form>
            </div>
            <div class="rounded-[28px] bg-gradient-to-br from-primary/10 via-transparent to-gold/10 p-8">
                <div class="rounded-[24px] bg-white p-6 shadow-sm border border-hairline">
                    <h3 class="text-2xl font-semibold text-ink">Informasi Kontak</h3>
                    <p class="mt-4 text-body-md text-body">Atau tulis ke alamat email dan lihat profil saya lewat tautan berikut.</p>
                    <div class="mt-6 space-y-4">
                        <div class="rounded-3xl bg-canvas-soft px-4 py-4">
                            <p class="text-sm text-mute">Email</p>
                            <p class="mt-2 font-semibold text-ink">pemilik@domain.com</p>
                        </div>
                        <div class="rounded-3xl bg-canvas-soft px-4 py-4">
                            <p class="text-sm text-mute">WhatsApp</p>
                            <p class="mt-2 font-semibold text-ink">+62 812-3456-7890</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
