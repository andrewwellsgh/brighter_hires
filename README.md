Installation
To set up this project locally:

Clone the repository:

Bash
git clone git@github.com:andrewwellsgh/brighter_hires.git
cd brighter_hires
Install dependencies:
This project uses Composer to manage the Stripe PHP library. Run the following command in the project root to install the necessary files into the vendor/ directory:

Bash
composer install
Configure Environment:
Create a .env file in the root directory (do not commit this to Git) and add your API keys:

Plaintext
STRIPE_SECRET_KEY=sk_test_your_actual_key_here