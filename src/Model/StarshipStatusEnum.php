<?php

namespace App\Model;

enum StarshipStatusEnum: string {
	case WAITING = 'wayting';
	case IN_PROGRESS = 'in progress';
	case COMPLETED = 'completed';
}
