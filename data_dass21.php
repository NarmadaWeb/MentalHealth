<?php
// data_dass21.php
// Data DASS-21 (Depression, Anxiety, and Stress Scale - 21 items)

$questions = [
    1 => ["text" => "Saya merasa sulit untuk menenangkan diri.", "type" => "stress"],
    2 => ["text" => "Saya menyadari mulut saya terasa kering.", "type" => "anxiety"],
    3 => ["text" => "Saya sama sekali tidak dapat merasakan perasaan positif.", "type" => "depression"],
    4 => ["text" => "Saya mengalami kesulitan bernapas padahal tidak sedang melakukan aktivitas fisik.", "type" => "anxiety"],
    5 => ["text" => "Saya merasa kesulitan untuk berinisiatif melakukan sesuatu.", "type" => "depression"],
    6 => ["text" => "Saya cenderung bereaksi berlebihan terhadap suatu situasi.", "type" => "stress"],
    7 => ["text" => "Saya pernah mengalami gemetar (misal: di tangan).", "type" => "anxiety"],
    8 => ["text" => "Saya merasa telah menghabiskan banyak energi karena merasa cemas.", "type" => "stress"],
    9 => ["text" => "Saya merasa khawatir dengan situasi dimana saya mungkin menjadi panik dan mempermalukan diri sendiri.", "type" => "anxiety"],
    10 => ["text" => "Saya merasa tidak ada hal yang dapat saya harapkan.", "type" => "depression"],
    11 => ["text" => "Saya menyadari bahwa saya mudah merasa gelisah.", "type" => "stress"],
    12 => ["text" => "Saya merasa sulit untuk bersantai.", "type" => "stress"],
    13 => ["text" => "Saya merasa sedih dan tertekan.", "type" => "depression"],
    14 => ["text" => "Saya merasa tidak sabar dengan apapun yang menghalangi hal yang sedang saya lakukan.", "type" => "stress"],
    15 => ["text" => "Saya merasa hampir panik.", "type" => "anxiety"],
    16 => ["text" => "Saya tidak dapat merasa antusias terhadap apapun.", "type" => "depression"],
    17 => ["text" => "Saya merasa bahwa saya tidak berharga.", "type" => "depression"],
    18 => ["text" => "Saya merasa mudah tersinggung.", "type" => "stress"],
    19 => ["text" => "Saya menyadari perubahan detak jantung padahal tidak sedang melakukan aktivitas fisik.", "type" => "anxiety"],
    20 => ["text" => "Saya merasa takut tanpa alasan yang jelas.", "type" => "anxiety"],
    21 => ["text" => "Saya merasa hidup ini tidak berarti.", "type" => "depression"],
];

$options = [
    0 => "Tidak pernah sama sekali",
    1 => "Kadang-kadang",
    2 => "Sering",
    3 => "Sangat sering"
];

function calculate_score($answers) {
    global $questions;
    $scores = [
        "depression" => 0,
        "anxiety" => 0,
        "stress" => 0
    ];

    foreach ($answers as $q_id => $answer) {
        $type = $questions[$q_id]["type"];
        $scores[$type] += $answer;
    }

    // DASS-21 score is multiplied by 2 to match DASS-42 scoring
    $scores["depression"] *= 2;
    $scores["anxiety"] *= 2;
    $scores["stress"] *= 2;

    return $scores;
}

function get_classification($type, $score) {
    if ($type === "depression") {
        if ($score <= 9) return "Normal";
        if ($score <= 13) return "Ringan";
        if ($score <= 20) return "Sedang";
        if ($score <= 27) return "Parah";
        return "Sangat Parah";
    } elseif ($type === "anxiety") {
        if ($score <= 7) return "Normal";
        if ($score <= 9) return "Ringan";
        if ($score <= 14) return "Sedang";
        if ($score <= 19) return "Parah";
        return "Sangat Parah";
    } elseif ($type === "stress") {
        if ($score <= 14) return "Normal";
        if ($score <= 18) return "Ringan";
        if ($score <= 25) return "Sedang";
        if ($score <= 33) return "Parah";
        return "Sangat Parah";
    }
    return "Normal";
}

function get_recommendation($level) {
    switch ($level) {
        case "Normal":
            return "Kondisi mental Anda saat ini terpelihara dengan baik. Tetap pertahankan gaya hidup sehat, kelola stres dengan baik, dan lakukan aktivitas yang Anda nikmati.";
        case "Ringan":
            return "Anda mungkin sedang mengalami tekanan ringan. Cobalah beristirahat sejenak, luangkan waktu untuk diri sendiri (me-time), berlatih pernapasan, atau bercerita dengan teman terdekat.";
        case "Sedang":
            return "Tekanan yang Anda rasakan mulai mengganggu keseharian Anda. Sangat disarankan untuk mulai memprioritaskan istirahat yang cukup, mengurangi beban pekerjaan jika memungkinkan, dan mempertimbangkan untuk berdiskusi dengan konselor.";
        case "Parah":
            return "Anda menunjukkan gejala stres, kecemasan, atau depresi yang signifikan. Anda tidak sendirian. Sangat disarankan untuk segera mencari bantuan profesional dari psikolog atau psikiater untuk mendapatkan penanganan yang tepat.";
        case "Sangat Parah":
            return "Kondisi ini memerlukan perhatian medis sesegera mungkin. Tolong jangan ragu untuk menghubungi layanan bantuan darurat atau profesional kesehatan mental (psikolog/psikiater) sekarang juga. Bantuan tersedia dan Anda berhak merasa lebih baik.";
        default:
            return "Tetap jaga kesehatan mental Anda.";
    }
}
?>