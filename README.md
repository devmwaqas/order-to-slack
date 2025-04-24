# 🧾 Order to Slack Form

This is a simple PHP + Bootstrap 5 project that allows agents to submit an order form, and posts the data to a Slack channel using an Incoming Webhook.

## 📌 Features

- Clean Bootstrap 5 order form
- PHP backend integration
- Slack Incoming Webhook messaging

## 🚀 How to Use

1. Clone the repo:
   ```
   git clone https://github.com/YOUR_USERNAME/order-to-slack.git
   ```
2. Open `submit.php` and replace this line:
   ```php
   $webhook_url = "https://hooks.slack.com/services/YOUR/WEBHOOK/URL";
   ```
   with your actual Slack webhook.

3. Upload to any PHP-enabled server (e.g., XAMPP, cPanel, etc.)

4. Open `index.html` in the browser and submit the form.

## ✅ Demo Screenshot

![image](https://github.com/user-attachments/assets/dc0dd0c1-d77a-44c2-bd66-3ee155586865)

![image](https://github.com/user-attachments/assets/e2112700-ac81-49bc-b3b0-57b4af630284)

![image](https://github.com/user-attachments/assets/5d6fcdcb-6146-4913-a9e9-3efe908b01a9)


5. License

This project is open-source and free to use.


6. Git Commands to Upload
Open terminal/command prompt in your project folder and run:

```bash
git init
git add .
git commit -m "Initial commit - Order form to Slack"
git branch -M main
git remote add origin https://github.com/YOUR_USERNAME/order-to-slack-form.git
git push -u origin main

✅ Done!