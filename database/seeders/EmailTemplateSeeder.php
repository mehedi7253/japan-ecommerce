<?php
namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class EmailTemplateSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('email_templates')->insert([
            [
                'name'    => 'welcome_email',
                'subject' => 'Welcome to Green Store',
                'body'    => '<table role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td style="padding: 20px 0 30px 0;"><table style="border-collapse: collapse; border: 1px solid #cccccc;" border="0" width="600" cellspacing="0" cellpadding="0" align="center"><tbody><tr><td style="padding: 40px 0 30px 0;" align="center" bgcolor="#1e1e2c"><img style="display: block;" src="https://ultrastore.trickycode.net/company-logo.png" alt="Creating Email Magic." width="80" height="80"/></td></tr><tr><td style="padding: 40px 30px 40px 30px;" bgcolor="#ffffff"><table style="border-collapse: collapse; height: 95px; width: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr style="height: 30px;"><td style="color: #153643; font-family: Arial, sans-serif; height: 30px;"><h1 style="font-size: 24px; margin: 0;">Welcome to Green Store</h1></td></tr><tr style="height: 47px;"><td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;"><p style="margin: 0;">Hi {name},</p><p style="margin: 0;">Your account is now ready to use. You can now login to your portal using your email and password.</p><p style="margin: 0;">&nbsp;</p><p style="margin: 0;">Thank You</p><p style="margin: 0;">Green Store</p></td></tr></tbody></table></td></tr><tr><td style="padding: 30px 30px;" bgcolor="#1e1e2c"><table style="border-collapse: collapse; width: 99.4769%;" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;"><p style="margin: 0px; text-align: center;">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>',
            ],
            [
                'name'    => 'order_placed',
                'subject' => 'Your Order Placed Successfully',
                'body'    => '<table role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td style="padding: 20px 0 30px 0;"><table style="border-collapse: collapse; border: 1px solid #cccccc;" border="0" width="600" cellspacing="0" cellpadding="0" align="center"><tbody><tr><td style="padding: 40px 0 30px 0;" align="center" bgcolor="#1e1e2c"><img style="display: block;" src="https://ultrastore.trickycode.net/company-logo.png" alt="Creating Email Magic." width="80" height="80"/></td></tr><tr><td style="padding: 40px 30px 40px 30px;" bgcolor="#ffffff"><table style="border-collapse: collapse; height: 95px; width: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr style="height: 30px;"><td style="color: #153643; font-family: Arial, sans-serif; height: 30px;"><h1 style="font-size: 24px; margin: 0;">Your Order Placed Successfully</h1></td></tr><tr style="height: 47px;"><td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;"><p style="margin: 0;">Hi {name},</p><p style="margin: 0;">Your Order (Order ID:{order_id}) has been placed sucessfully. Your order will be shipped within next 3 business days.</p><p style="margin: 0;">&nbsp;</p><p style="margin: 0;">Order ID:{order_id}</p><p style="margin: 0;">Order Status:{delivery_status}</p><p style="margin: 0;">Payment Status:{payment_status}</p><p style="margin: 0;">Payment Method:{payment_method}</p><p style="margin: 0;">&nbsp;</p><p style="margin: 0;">Thank you for shopping with us.</p><p style="margin: 0;">&nbsp;</p><p style="margin: 0;">Thank You</p><p style="margin: 0;">Green Store</p></td></tr></tbody></table></td></tr><tr><td style="padding: 30px 30px;" bgcolor="#1e1e2c"><table style="border-collapse: collapse; width: 99.4769%;" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;"><p style="margin: 0px; text-align: center;">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>',
            ],
            [
                'name'    => 'order_processing',
                'subject' => 'Your Order Marked as Processing',
                'body'    => '<table role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td style="padding: 20px 0 30px 0;"><table style="border-collapse: collapse; border: 1px solid #cccccc;" border="0" width="600" cellspacing="0" cellpadding="0" align="center"><tbody><tr><td style="padding: 40px 0 30px 0;" align="center" bgcolor="#1e1e2c"><img style="display: block;" src="https://ultrastore.trickycode.net/company-logo.png" alt="Creating Email Magic." width="80" height="80"/></td></tr><tr><td style="padding: 40px 30px 40px 30px;" bgcolor="#ffffff"><table style="border-collapse: collapse; height: 95px; width: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr style="height: 30px;"><td style="color: #153643; font-family: Arial, sans-serif; height: 30px;"><h1 style="font-size: 24px; margin: 0;">Your Order has been processed</h1></td></tr><tr style="height: 47px;"><td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;"><p style="margin: 0;">Hi {name},</p><p style="margin: 0;">Your Order (Order ID:{order_id}) has been processed.</p><p style="margin: 0;">&nbsp;</p><p style="margin: 0;">Order ID:{order_id}</p><p style="margin: 0;">Order Status:{delivery_status}</p><p style="margin: 0;">Payment Status:{payment_status}</p><p style="margin: 0;">Payment Method:{payment_method}</p><p style="margin: 0;">&nbsp;</p><p style="margin: 0;">Thank you for shopping with us.</p><p style="margin: 0;">&nbsp;</p><p style="margin: 0;">Thank You</p><p style="margin: 0;">Green Store</p></td></tr></tbody></table></td></tr><tr><td style="padding: 30px 30px;" bgcolor="#1e1e2c"><table style="border-collapse: collapse; width: 99.4769%;" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;"><p style="margin: 0px; text-align: center;">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>',
            ],
            [
                'name'    => 'order_completed',
                'subject' => 'Your Order Marked as Completed',
                'body'    => '<table role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td style="padding: 20px 0 30px 0;"><table style="border-collapse: collapse; border: 1px solid #cccccc;" border="0" width="600" cellspacing="0" cellpadding="0" align="center"><tbody><tr><td style="padding: 40px 0 30px 0;" align="center" bgcolor="#1e1e2c"><img style="display: block;" src="https://ultrastore.trickycode.net/company-logo.png" alt="Creating Email Magic." width="80" height="80"/></td></tr><tr><td style="padding: 40px 30px 40px 30px;" bgcolor="#ffffff"><table style="border-collapse: collapse; height: 95px; width: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr style="height: 30px;"><td style="color: #153643; font-family: Arial, sans-serif; height: 30px;"><h1 style="font-size: 24px; margin: 0;">Your Order has Completed</h1></td></tr><tr style="height: 47px;"><td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;"><p style="margin: 0;">Hi {name},</p><p style="margin: 0;">Your Order (Order ID:{order_id}) has completed.</p><p style="margin: 0;">&nbsp;</p><p style="margin: 0;">Order ID:{order_id}</p><p style="margin: 0;">Order Status:{delivery_status}</p><p style="margin: 0;">Payment Status:{payment_status}</p><p style="margin: 0;">Payment Method:{payment_method}</p><p style="margin: 0;">&nbsp;</p><p style="margin: 0;">Thank you for shopping with us.</p><p style="margin: 0;">&nbsp;</p><p style="margin: 0;">Thank You</p><p style="margin: 0;">Green Store</p></td></tr></tbody></table></td></tr><tr><td style="padding: 30px 30px;" bgcolor="#1e1e2c"><table style="border-collapse: collapse; width: 99.4769%;" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;"><p style="margin: 0px; text-align: center;">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>',
            ],
            [
                'name'    => 'order_canceled',
                'subject' => 'Your Order Marked as Canceled',
                'body'    => '<table role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td style="padding: 20px 0 30px 0;"><table style="border-collapse: collapse; border: 1px solid #cccccc;" border="0" width="600" cellspacing="0" cellpadding="0" align="center"><tbody><tr><td style="padding: 40px 0 30px 0;" align="center" bgcolor="#1e1e2c"><img style="display: block;" src="https://ultrastore.trickycode.net/company-logo.png" alt="Creating Email Magic." width="80" height="80"/></td></tr><tr><td style="padding: 40px 30px 40px 30px;" bgcolor="#ffffff"><table style="border-collapse: collapse; height: 95px; width: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr style="height: 30px;"><td style="color: #153643; font-family: Arial, sans-serif; height: 30px;"><h1 style="font-size: 24px; margin: 0;">Your Order has been canceled</h1></td></tr><tr style="height: 47px;"><td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;"><p style="margin: 0;">Hi {name},</p><p style="margin: 0;">Your Order (Order ID:{order_id}) has been canceled.</p><p style="margin: 0;">&nbsp;</p><p style="margin: 0;">Order ID:{order_id}</p><p style="margin: 0;">Order Status:{delivery_status}</p><p style="margin: 0;">Payment Status:{payment_status}</p><p style="margin: 0;">Payment Method:{payment_method}</p><p style="margin: 0;">&nbsp;</p><p style="margin: 0;">Thank you for shopping with us.</p><p style="margin: 0;">&nbsp;</p><p style="margin: 0;">Thank You</p><p style="margin: 0;">Green Store</p></td></tr></tbody></table></td></tr><tr><td style="padding: 30px 30px;" bgcolor="#1e1e2c"><table style="border-collapse: collapse; width: 99.4769%;" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;"><p style="margin: 0px; text-align: center;">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>',
            ],
            [
                'name'    => 'assign_delivery_boy',
                'subject' => 'New order assign to you for delivery',
                'body'    => '<table role="presentation" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td style="padding: 20px 0 30px 0;"><table style="border-collapse: collapse; border: 1px solid #cccccc;" border="0" width="600" cellspacing="0" cellpadding="0" align="center"><tbody><tr><td style="padding: 40px 0 30px 0;" align="center" bgcolor="#1e1e2c"><img style="display: block;" src="https://ultrastore.trickycode.net/company-logo.png" alt="Creating Email Magic." width="80" height="80"/></td></tr><tr><td style="padding: 40px 30px 40px 30px;" bgcolor="#ffffff"><table style="border-collapse: collapse; height: 95px; width: 100%;" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr style="height: 30px;"><td style="color: #153643; font-family: Arial, sans-serif; height: 30px;"><h1 style="font-size: 24px; margin: 0;">New order assign to you for delivery</h1></td></tr><tr style="height: 47px;"><td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0px 30px; height: 47px;"><p style="margin: 0;">Hi{name},</p><p style="margin: 0;">New Order (Order ID:{order_id}) has been assigned to you for delivery.</p><p style="margin: 0;">&nbsp;</p><p style="margin: 0;">Order ID:{order_id}</p><p style="margin: 0;">Order Status:{delivery_status}</p><p style="margin: 0;">Payment Status:{payment_status}</p><p style="margin: 0;">Payment Method:{payment_method}</p><p style="margin: 0;">&nbsp;</p><p style="margin: 0;">Thank you for shopping with us.</p><p style="margin: 0;">&nbsp;</p><p style="margin: 0;">Thank You</p><p style="margin: 0;">Green Store</p></td></tr></tbody></table></td></tr><tr><td style="padding: 30px 30px;" bgcolor="#1e1e2c"><table style="border-collapse: collapse; width: 99.4769%;" border="0" width="100%" cellspacing="0" cellpadding="0"><tbody><tr><td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px; width: 99.8141%;"><p style="margin: 0px; text-align: center;">&reg; Tricky Code 2021</p></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table>',
            ],

        ]);

    }
}
