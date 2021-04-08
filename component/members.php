<?php 

require('../connect.php');

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

if($result){
    while ($row = $result->fetch_assoc()) {
        echo '<div class="md:mx-12 md:rounded p-6 bg-white border-b border-gray-200 mb-4">
        <div class="flex items-center px-4">
            <div class="flex-shrink-0">
                <svg class="h-10 w-10 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                </svg>
            </div>

            <div class="ml-3">
                <div class="font-medium text-base text-gray-800">'. $row['username'] .'</div>
                <!-- <div class="font-medium text-sm text-gray-500">GRADE</div> -->
            </div>
        </div>

        <br>

        <div class="ml-3" style="display: flex; margin: auto;">
        <div class="p-2" style="margin: 0 0 0 auto;">
            <form action="../member/memberEdit.php" method="POST" class="d-inline">
                <input type="hidden" value="'. $row['id'] .'" name="user_id">
                <button type="submit" class="items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs">
                    <i class="fa fa-pencil" aria-hidden="true" style="font-size: 18px;"></i>
                </button>
            </form>
        </div>
        <div class="p-2">
            <form action="../member/memberDelete.php" method="POST" class="d-inline">
                <input type="hidden" value="'. $row['id'] .'" name="user_id">
                <button type="submit" class="items-center px-4 py-2 bg-gray-200 border border-transparent rounded-md font-semibold text-xs">
                    <i class="fa fa-trash" aria-hidden="true" style="font-size: 18px;"></i>
                </button>
            </form>
        </div>
        </div>
    </div>';
    }
}
