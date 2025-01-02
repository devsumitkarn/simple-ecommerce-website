{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Checkout</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head> --}}
@extends('Frontend.layouts.main')
@section('content')
<div class="container py-4">
    <!-- Progress Steps -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="position-relative m-4">
                <div class="progress" style="height: 1px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 33%"></div>
                </div>
                <div class="position-absolute d-flex justify-content-between w-100 align-items-center" style="top: -14px;">
                    <div class="d-flex flex-column align-items-center">
                        <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">1</div>
                        <span class="small mt-1">SHIPPING</span>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">2</div>
                        <span class="small mt-1">PAYMENT</span>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width: 30px; height: 30px;">3</div>
                        <span class="small mt-1">REVIEW & SUBMIT</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Shipping Form -->
        <div class="col-md-8">
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-4">Shipping Address</h5>
                    <form>
                        <div class="mb-3">
                            <select class="form-select">
                                <option selected>India</option>
                            </select>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="First Name" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Last Name">
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Address Line 1">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Address Line 2">
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="ZIP">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="City">
                            </div>
                            <div class="col">
                                <select class="form-select">
                                    <option selected>State</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <input type="tel" class="form-control" placeholder="Phone">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="newsletter">
                            <label class="form-check-label text-muted" for="newsletter">
                                Sign Up for Weekly B&H Email Newsletters
                            </label>
                        </div>
                        <button type="submit" class="btn btn-success px-4">View Shipping Options</button>
                    </form>
                </div>
            </div>

            <!-- Payment Options -->
            <div class="card shadow-sm mb-4">
                <div class="card-body">
                    <h5 class="card-title mb-4">Payment Method</h5>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="paymentMethod" id="cashOnDelivery" checked>
                            <label class="form-check-label" for="cashOnDelivery">
                                Cash on Delivery
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="paymentMethod" id="razorpay">
                            <label class="form-check-label" for="razorpay">
                                Razorpay
                            </label>
                        </div>
                    </div>
                    <div id="razorpayDetails" class="d-none">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Card Number">
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="MM/YY">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="CVV">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Order Summary -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-4">Order Summary</h5>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Subtotal:</span>
                        <span>₹{{ number_format($cartItems->sum(fn($item) => $item->quantity * $item->product->price), 2) }}</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Shipping:</span>
                        <span class="text-muted">Enter Address</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2">
                        <span>Duties & Taxes:</span>
                        <span class="text-muted">Due Upon Delivery</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-4">
                        <strong>You Pay:</strong>
                        <strong>$99.45</strong>
                    </div>
                    <button class="btn btn-success w-100 mb-3" id="orderButton">Place Order</button>
                    <button class="btn btn-outline-success w-100 mb-3">
                        <i class="bi bi-gift me-2"></i>Select Gift Options
                    </button>
                    <div class="text-center mt-4">
                        <div class="d-flex justify-content-center gap-3 mb-2">
                            <span>
                                <i class="bi bi-chat-fill me-1"></i>LIVE CHAT
                            </span>
                            <span>800.606.6969</span>
                        </div>
                        <small class="text-muted">Toll Free US & 47.51.180.1</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" tabindex="-1" id="orderModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Success</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Order placed successfully!</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Simple script to toggle Razorpay details
        document.addEventListener('DOMContentLoaded', function() {
            const razorpayRadio = document.getElementById('razorpay');
            const razorpayDetails = document.getElementById('razorpayDetails');
            
            razorpayRadio.addEventListener('change', function() {
                razorpayDetails.classList.toggle('d-none', !this.checked);
            });

            document.getElementById('cashOnDelivery').addEventListener('change', function() {
                razorpayDetails.classList.add('d-none');
            });
        });
    </script>
    <script>
        document.getElementById('orderButton').addEventListener('click', function() {
          // Show the modal when button is clicked
          var myModal = new bootstrap.Modal(document.getElementById('orderModal'));
          myModal.show();
        });
      </script>
      
      <!-- You will need to include Bootstrap CSS and JS for the modal to work -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection   


