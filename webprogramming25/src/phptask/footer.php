<footer class="mt-5 py-4 bg-dark text-white text-center">
        <div class="container">
            <p>&copy; 2026 Web Development Tasks - Kushani</p>
            <p class="text-info" style="font-size: 0.9rem;">
                <?php
                    
                    $current_file = basename($_SERVER['PHP_SELF']);
                    $last_modified = filemtime($current_file);
                    
                    echo "This page was last modified on: " . date("F d, Y H:i:s", $last_modified);
                ?>
            </p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>