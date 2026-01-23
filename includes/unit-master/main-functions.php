<?php
/**
 * Projet : Unit-Master
 * Fichier : main-functions.php
 * Rôle : Logique mathématique et utilitaires PHP.
 */

/**
 * Convertit des Pixels en REM
 * @param float $px Valeur en pixels
 * @param float $base Base de calcul (défaut 16)
 * @return string
 */
if (!function_exists('um_px_to_rem')) {
    function um_px_to_rem($px, $base = 16) {
        if ($base <= 0) return '0rem';
        $result = $px / $base;
        return round($result, 3) . 'rem';
    }
}

/**
 * Convertit des Pixels en Viewport Width (VW)
 * @param float $px Valeur en pixels
 * @param float $viewport_width Largeur de l'écran de référence
 * @return string
 */
if (!function_exists('um_px_to_vw')) {
    function um_px_to_vw($px, $viewport_width = 1920) {
        if ($viewport_width <= 0) return '0vw';
        $result = ($px * 100) / $viewport_width;
        return round($result, 3) . 'vw';
    }
}

/**
 * Convertit des Pixels en Viewport Height (VH)
 * @param float $px Valeur en pixels
 * @param float $viewport_height Hauteur de l'écran de référence
 * @return string
 */
if (!function_exists('um_px_to_vh')) {
    function um_px_to_vh($px, $viewport_height = 1080) {
        if ($viewport_height <= 0) return '0vh';
        $result = ($px * 100) / $viewport_height;
        return round($result, 3) . 'vh';
    }
}

/**
 * Nettoyage de chaîne pour la sécurité (utilitaire)
 */
if (!function_exists('um_clean')) {
    function um_clean($data) {
        return htmlspecialchars(strip_tags(trim($data)));
    }
}

/**
 * Calculateur de ratio d'aspect (Aspect Ratio)
 * Utile pour les conteneurs d'images ou de vidéos
 */
if (!function_exists('um_get_aspect_ratio')) {
    function um_get_aspect_ratio($width, $height) {
        if ($height <= 0) return '1/1';
        $gcd = function($a, $b) use (&$gcd) {
            return ($a % $b) ? $gcd($b, $a % $b) : $b;
        };
        $divisor = $gcd($width, $height);
        return ($width / $divisor) . '/' . ($height / $divisor);
    }
}