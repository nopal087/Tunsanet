<div class="modal fade" id="cookieModal" tabindex="-1" aria-labelledby="cookieModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cookieModalLabel">Notifikasi Cookies</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Kami menggunakan cookie untuk meningkatkan pengalaman Anda di situs kami. Dengan mengeklik "Terima
                    Semua Cookie", Anda menyetujui penggunaan
                    semua cookie</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tolak</button>
                <button type="button" class="btn btn-primary" id="acceptAllCookies">Terima semua cookie</button>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script>
    // Fungsi untuk menampilkan modal setelah halaman dimuat
    function showCookieModal() {
        $('#cookieModal').modal('show');
    }

    // Fungsi untuk menangani klik tombol "Accept All Cookies"
    function acceptAllCookies() {
        // Set cookie "cookieConsent" dengan nilai "true" dan masa berlaku selama 30 hari
        document.cookie = "cookieConsent=true; max-age=" + 30 * 24 * 60 * 60;
        // Tutup modal
        $('#cookieModal').modal('hide');
    }

    // Tampilan modal setelah halaman dimuat jika cookie "cookieConsent" belum diatur
    $(document).ready(function() {
        if (document.cookie.indexOf('cookieConsent=true') < 0) {
            showCookieModal();
        }
    });

    // event listener untuk tombol "Accept All Cookies"
    document.getElementById('acceptAllCookies').addEventListener('click', acceptAllCookies);
</script>
